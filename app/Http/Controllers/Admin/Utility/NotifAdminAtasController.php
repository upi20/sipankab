<?php

namespace App\Http\Controllers\Admin\Utility;

use App\Http\Controllers\Controller;
use App\Models\Utility\NotifAdminAtas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;
use Yajra\Datatables\Datatables;

class NotifAdminAtasController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string', 'max:255'],
        'link' => ['nullable', 'string', 'max:255'],
        'link_nama' => ['nullable', 'string', 'max:255'],
        'deskripsi' => ['required', 'string'],
        'dari' => ['required', 'date'],
        'sampai' => ['nullable', 'date'],
    ];

    private $query = [];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }

        $page_attr = adminBreadcumb(h_prefix());

        $view = path_view('pages.admin.utility.notif_admin_atas');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new NotifAdminAtas();
            $model->nama = $request->nama;
            $model->deskripsi = $request->deskripsi;
            $model->dari = $request->dari;
            $model->sampai = $request->sampai;
            $model->link = $request->link;
            $model->link_nama = $request->link_nama;
            $model->save();

            NotifAdminAtas::feClearCache();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {
            $model = NotifAdminAtas::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->nama = $request->nama;
            $model->deskripsi = $request->deskripsi;
            $model->dari = $request->dari;
            $model->sampai = $request->sampai;
            $model->link = $request->link;
            $model->link_nama = $request->link_nama;
            $model->save();

            NotifAdminAtas::feClearCache();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(NotifAdminAtas $model): mixed
    {
        try {
            $model->delete();

            NotifAdminAtas::feClearCache();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        return NotifAdminAtas::findOrFail($request->id);
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $table = NotifAdminAtas::tableName;

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
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));

        $c_dari_str = 'dari_str';
        $c_sampai_str = 'sampai_str';
        $this->query = array_merge($this->query, $date_format_fun('dari', '%W, %d %M %Y', $c_dari_str));
        $this->query = array_merge($this->query, $date_format_fun('sampai', '%W, %d %M %Y', $c_sampai_str));

        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            return $this->query[$col] . ' as ' . $this->query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_dari_str,
            $c_sampai_str,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = NotifAdminAtas::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw));

        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();
        foreach ($model_filter as $v) {
            // custom pencarian
            $datatable->filterColumn($this->query["{$v}_alias"], function ($query, $keyword) use ($v) {
                $query->whereRaw("({$this->query[$v]} like '%$keyword%')");
            });
        }
        // create datatable
        return $datatable->make(true);
    }
}
