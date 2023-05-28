<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Support\Facades\Cache;

class Kategori extends Model
{
    use HasFactory, Sluggable, Loggable;
    protected $fillable = [
        'urutan',
        'nama',
        'slug',
        'keterangan',
    ];
    protected $primaryKey = 'id';
    protected $table = 'portfolio_kategori';
    const tableName = 'portfolio_kategori';
    const feCacheKey = 'fePortfolioKategoriHome';
    const feNavKey = 'fePortfolioNav';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function sub()
    {
        return $this->hasMany(SubKategori::class, 'kategori_id', 'id');
    }

    public static function datatable(Request $request): mixed
    {
        // list table
        $query = [];
        $table = static::tableName;
        $t_sub = SubKategori::tableName;
        $t_portofolio = Portfolio::tableName;

        // cusotm query
        // ========================================================================================================
        // creted at and updated at
        $date_format_fun = function (string $select, string $format, string $alias) use ($table): array {
            $str = <<<SQL
                (DATE_FORMAT($table.$select, '$format'))
            SQL;
            return [$alias => $str, ($alias . '_alias') => $alias];
        };

        $c_created = 'created';
        $c_created_str = 'created_str';
        $c_updated = 'updated';
        $c_updated_str = 'updated_str';
        $query = array_merge($query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $query = array_merge($query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $query = array_merge($query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $query = array_merge($query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));

        // sub
        $c_sub_count = 'sub_count';
        $query[$c_sub_count] = <<<SQL
                    (select count(*) from $t_sub where $t_sub.kategori_id = $table.id limit 1)
                SQL;
        $query["{$c_sub_count}_alias"] = $c_sub_count;

        $c_porto_count = 'porto_count';
        $query[$c_porto_count] = <<<SQL
                    (select count(*) from $t_portofolio as z
                        join $t_sub as x on z.kategori_id = x.id where x.kategori_id = $table.id limit 1)
                SQL;
        $query["{$c_porto_count}_alias"] = $c_porto_count;
        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col) use ($query): string {
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_sub_count,
            $c_porto_count,
        ];

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

        // filter custom
        $filters = [];
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

    public static function getFeHomeData()
    {
        return Cache::rememberForever(static::feCacheKey, function () {
            return static::with(['kategori', 'fotos', 'marketplaces.jenis'])
                ->where('tampilkan_di_halaman_utama', 1)->orderBy('created_at', 'desc')->get();
        });
    }

    public static function clearCache()
    {

        $cacheKey = [
            static::feCacheKey,
            static::feNavKey,
        ];

        foreach ($cacheKey as $key) Cache::pull($key);
    }

    public static function getNavData()
    {
        return Cache::rememberForever(static::feNavKey, function () {
            return static::with(['sub' => function ($query) {
                return $query->orderBy('urutan');
            }])->get();
        });
    }
}
