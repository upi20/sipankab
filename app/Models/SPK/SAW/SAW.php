<?php

namespace App\Models\SPK\SAW;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Cviebrock\EloquentSluggable\Sluggable;

class SAW extends Model
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'id',
        'nama',
        'slug',
        'keterangan',
        'status',
    ];

    protected $primaryKey = 'id';
    protected $table = 'spk_saw';
    const tableName = 'spk_saw';
    const image_folder = '/assets/spk/saw';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function kriterias()
    {
        return $this->hasMany(Kriteria::class, 'spk_id', 'id');
    }

    public function alternatifs()
    {
        return $this->hasMany(Alternatif::class, 'spk_id', 'id');
    }

    public function perhitungan()
    {
        $t_alternatif = Alternatif::tableName;
        $t_an = AlternatifNilai::tableName;

        // 1. Membuat matriks keputusan
        $hitung = AlternatifNilai::datatable($this);
        // mengubah nilai mix menjadi array
        $hitung = json_encode($hitung);
        $hitung = json_decode($hitung, true);

        // 1.1. Mengambil nilai max dari tiap2 kriteria
        $hitung['maxs'] = [];
        foreach ($hitung['header'] as $header) {
            $hitung['maxs'][] = AlternatifNilai::join($t_alternatif, "$t_alternatif.id", '=', "$t_an.alternatif_id")
                ->where('kriteria_id', $header['id'])
                ->where("$t_alternatif.spk_id", $this->id)->max("$t_an.nilai");
        }
        $step[0] = $hitung;

        // 2. Dibagi nilai tertinggi
        for ($i = 0; $i < count($hitung['body']); $i++) {
            for ($j = 0; $j < count($hitung['body'][$i]['nilais']); $j++) {
                if ($hitung['body'][$i]['nilais'][$j] != null) {
                    if ($hitung['maxs'][$j]) { // pastikan max ada
                        $hitung['body'][$i]['nilais'][$j]['nilai_str'] = $hitung['body'][$i]['nilais'][$j]['nilai'] . " / " . $hitung['maxs'][$j];
                        $hitung['body'][$i]['nilais'][$j]['nilai'] /= $hitung['maxs'][$j];
                    } else { // jika tidak jadikan 0 saja
                        $hitung['body'][$i]['nilais'][$j]['nilai_str'] = $hitung['body'][$i]['nilais'][$j]['nilai'] . " / " . 0;
                        $hitung['body'][$i]['nilais'][$j]['nilai'] = 0;
                    }
                }
            }
        }
        $step[1] = $hitung;

        // 3. Dikali bobot kriteria
        for ($i = 0; $i < count($hitung['body']); $i++) {
            $total = 0;
            $total_str = "";
            for ($j = 0; $j < count($hitung['body'][$i]['nilais']); $j++) {
                if ($hitung['body'][$i]['nilais'][$j] != null) {
                    $bobot = $hitung['body'][$i]['nilais'][$j]['kriteria']['bobot'] / 100;

                    $hitung['body'][$i]['nilais'][$j]['nilai_str'] = $hitung['body'][$i]['nilais'][$j]['nilai'] . " * " . $bobot;
                    $hitung['body'][$i]['nilais'][$j]['nilai'] *= $bobot;

                    $total += $hitung['body'][$i]['nilais'][$j]['nilai'];
                    $total_str .= (($total_str == "" ? "" : " + ") . $hitung['body'][$i]['nilais'][$j]['nilai']);
                }
            }

            $hitung['body'][$i]['total'] = $total;
            $hitung['body'][$i]['total_str'] = $total_str;
        }
        $step[2] = $hitung;

        // 4. sortir by rank
        $collects = collect($hitung['body'])->sortByDesc('total')->values()->all();
        $hitung['body'] = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $hitung['body'][] = $v;
        }

        $step[3] = $hitung;
        // dd($step);
        return $step;
    }

    public static function datatable(Request $request): mixed
    {
        $query = [];
        // import
        $table = self::tableName;

        $c_status_str = 'status_str';
        $query[$c_status_str] = <<<SQL
                         (if($table.status = 1, 'Diumumkan', if($table.status = 2, 'Selesai', 'Proses')))
                SQL;
        $query["{$c_status_str}_alias"] = $c_status_str;

        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col) use ($query): string {
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };
        $model_filter = [$c_status_str];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = self::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw));

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v) !== false) {
                $model->whereRaw("{$query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = ['status'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $static = new static();
            $search_add = $static->fillable;
            $search_add = array_map(function ($v) use ($table) {
                return "$table.$v";
            }, $search_add);
            $search_arr = array_merge($model_filter, $search_add);


            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });

        // create datatable
        return $datatable->make(true);
    }
}
