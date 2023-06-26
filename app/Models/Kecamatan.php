<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Cviebrock\EloquentSluggable\Sluggable;

class Kecamatan extends Model
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'id',
        'kode',
        'nama',
        'slug',
        'jml_lulus',
        'import_id',
    ];

    protected $primaryKey = 'id';
    protected $table = 'kecamatan';
    const tableName = 'kecamatan';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public static function datatable(Request $request): mixed
    {
        $query = [];
        // import
        $table = static::tableName;
        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            global $query;
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };
        $model_filter = [];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = static::select(array_merge([
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
        $filters = ['import_id'];
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

    public function calons()
    {
        return $this->hasMany(Calon::class, 'kecamatan_id', 'id');
    }

    public function saw()
    {
        $request = new Request(['kecamatan_id' => $this->id]);

        $t_calon = Calon::tableName;
        $t_an = CalonNilai::tableName;

        // 1. Membuat matriks keputusan
        $hitung = CalonNilai::datatable($request);

        // mengubah nilai mix menjadi array
        $hitung = json_encode($hitung);
        $hitung = json_decode($hitung, true);

        // 1.1. Mengambil nilai max dari tiap2 tahapan
        $hitung['maxs'] = [];
        foreach ($hitung['header'] as $header) {
            $hitung['maxs'][] = CalonNilai::join($t_calon, "$t_calon.id", '=', "$t_an.calon_id")
                ->where('tahapan_id', $header['id'])
                ->where("$t_calon.kecamatan_id", $this->id)->max("$t_an.nilai");
        }
        $step[0] = $hitung;

        // 2. Dibagi nilai tertinggi
        for ($i = 0; $i < count($hitung['body']); $i++) {
            $nilai_total = 0;
            $nilai_total_str = "";
            for ($j = 0; $j < count($hitung['body'][$i]['nilais']); $j++) {
                if ($hitung['body'][$i]['nilais'][$j] != null) {
                    $nilai = $hitung['body'][$i]['nilais'][$j]['nilai'];
                    $nilai_str = '';

                    // sebelum di jumlahkan catat dulu untuk deviasi
                    $nilai_total_str .= (($nilai_total_str == "" ? "" : " + ") . $nilai);
                    $nilai_total += $nilai;

                    // bagi dengan nilai tertinggi
                    if ($hitung['maxs'][$j]) { // pastikan max ada
                        $nilai_str = $nilai . " / " . $hitung['maxs'][$j];
                        $nilai /= $hitung['maxs'][$j];
                    } else { // jika tidak jadikan 0 saja
                        $nilai_str = $nilai . " / " . 0;
                        $nilai = 0;
                    }
                    $hitung['body'][$i]['nilais'][$j]['nilai'] = $nilai;
                    $hitung['body'][$i]['nilais'][$j]['nilai_str'] = $nilai_str;
                }
            }
            $hitung['body'][$i]['nilai_total'] = $nilai_total;
            $hitung['body'][$i]['nilai_total_str'] = $nilai_total_str;
        }
        $step[1] = $hitung;

        // 3. Dikali bobot tahapan
        $total_deviasi = 0;
        for ($i = 0; $i < count($hitung['body']); $i++) {
            $total = 0;
            $total_str = "";
            for ($j = 0; $j < count($hitung['body'][$i]['nilais']); $j++) {
                if ($hitung['body'][$i]['nilais'][$j] != null) {
                    $nilai = $hitung['body'][$i]['nilais'][$j]['nilai'];
                    $bobot = $hitung['body'][$i]['nilais'][$j]['tahapan']['bobot'] / 100;

                    $hitung['body'][$i]['nilais'][$j]['nilai_str'] = $nilai . " * " . $bobot;
                    $nilai *= $bobot;

                    $total += $nilai;
                    $total_str .= (($total_str == "" ? "" : " + ") . $nilai);

                    $hitung['body'][$i]['nilais'][$j]['nilai'] = $nilai;
                }
            }

            $hitung['body'][$i]['total'] = $total;
            $hitung['body'][$i]['total_str'] = $total_str;

            // hitung deviasi
            $S = $total;
            $total = $hitung['body'][$i]['nilai_total'];
            $hitung['body'][$i]['nilai_total_str'] = "($total - $S) ^ 2";

            $deviasi = ($total - $S) ^ 2;
            $hitung['body'][$i]['nilai_total'] = $deviasi;
            $total_deviasi += $deviasi;
        }
        $hitung['total_deviasi'] = $total_deviasi;
        $step[2] = $hitung;

        // 4. sortir by rank
        $collects = collect($hitung['body'])->sortByDesc('total')->values()->all();
        $hitung['body'] = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $hitung['body'][] = $v;
        }

        $step[3] = $hitung;
        return $step;
    }

    public function wp()
    {
        $request = new Request(['kecamatan_id' => $this->id]);

        // 1. Membuat matriks keputusan
        $hitung = CalonNilai::datatable($request);
        // mengubah nilai mix menjadi array
        $hitung = json_encode($hitung);
        $hitung = json_decode($hitung, true);
        $step[0] = $hitung;

        // 2. Nilai asli tahapan di pangkat bobot tahapan
        $total = 0;
        for ($i = 0; $i < count($hitung['body']); $i++) {
            $jumlah = 0;
            $jumlah_str = "";
            $nilai_total = 0;
            $nilai_total_str = "";
            for ($j = 0; $j < count($hitung['body'][$i]['nilais']); $j++) {
                if ($hitung['body'][$i]['nilais'][$j] != null) {
                    $bobot = $hitung['body'][$i]['nilais'][$j]['tahapan']['bobot'] / 100;
                    $nilai = $hitung['body'][$i]['nilais'][$j]['nilai'];
                    $pangkat = pow($nilai, $bobot);
                    $hitung['body'][$i]['nilais'][$j]['nilai_str'] = $nilai . " ^ " . $bobot;
                    $hitung['body'][$i]['nilais'][$j]['nilai'] = $pangkat;

                    // jumlah
                    $jumlah_str .= (($jumlah_str == "" ? "" : " * ") . $pangkat);
                    $jumlah = ($jumlah == 0) ? $pangkat : ($jumlah * $pangkat);

                    // total
                    $nilai_total_str .= (($nilai_total_str == "" ? "" : " + ") . $nilai);
                    $nilai_total += $nilai;
                }
            }

            $hitung['body'][$i]['jumlah'] = $jumlah;
            $hitung['body'][$i]['jumlah_str'] = $jumlah_str;

            $hitung['body'][$i]['nilai_total'] = $nilai_total;
            $hitung['body'][$i]['nilai_total_str'] = $nilai_total_str;
            $total += $jumlah;
        }
        $hitung['total'] = $total;
        $step[1] = $hitung;

        // 3. Nilai vektor s per nomor peserta  dibagi  Jumlah seluruh nilai vektor S
        $total = $hitung['total'];
        $total_deviasi = 0;
        for ($i = 0; $i < count($hitung['body']); $i++) {
            $jumlah = $hitung['body'][$i]['jumlah'];
            $hitung['body'][$i]['jumlah'] = $jumlah / $total;
            $hitung['body'][$i]['jumlah_str'] = $jumlah . ' / ' . $total;

            // deviasi
            $S = $hitung['body'][$i]['jumlah'];
            $total = $hitung['body'][$i]['nilai_total'];
            $hitung['body'][$i]['nilai_total_str'] = "($total - $S) ^ 2";

            $deviasi = ($total - $S) ^ 2;
            $hitung['body'][$i]['nilai_total'] = $deviasi;
            $total_deviasi += $deviasi;
        }
        $hitung['total_deviasi'] = $total_deviasi;
        $step[2] = $hitung;

        // 4. sortir by rank
        $collects = collect($hitung['body'])->sortByDesc('jumlah')->values()->all();
        $hitung['body'] = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $hitung['body'][] = $v;
        }

        $step[3] = $hitung;
        return $step;
    }
}
