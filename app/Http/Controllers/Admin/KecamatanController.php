<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Import\Kecamatan as ImportKecamatan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class KecamatanController extends Controller
{
    private $validate_model = [
        'kode' => ['required', 'string', 'unique:' . Kecamatan::tableName],
        'nama' => ['required', 'string'],
        'jml_lulus' => ['required', 'integer'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Kecamatan::datatable($request);
        }

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.kecamatan');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Kecamatan();
            $model->kode = $request->kode;
            $model->nama = $request->nama;
            $model->jml_lulus = $request->jml_lulus;
            $model->save();
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
            $this->validate_model['kode'] = ['required', 'string', 'unique:' . Kecamatan::tableName . ',kode,' . $request->id];

            $model = Kecamatan::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->kode = $request->kode;
            $model->nama = $request->nama;
            $model->jml_lulus = $request->jml_lulus;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Kecamatan $model): mixed
    {
        try {
            $model->delete();
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
        return Kecamatan::findOrFail($request->id);
    }

    public function export(Request $request)
    {
        return ImportKecamatan::export($request);
    }
}
