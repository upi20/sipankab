<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tahapan;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class TahapanController extends Controller
{
    private $validate_model = [
        'kode' => ['required', 'string', 'unique:' . Tahapan::tableName],
        'nama' => ['required', 'string'],
        'bobot' => ['required', 'integer'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Tahapan::datatable($request);
        }

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.tahapan');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Tahapan();
            $model->kode = $request->kode;
            $model->nama = $request->nama;
            $model->bobot = $request->bobot;
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
            $this->validate_model['kode'] = ['required', 'string', 'unique:' . Tahapan::tableName . ',kode,' . $request->id];

            $model = Tahapan::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->kode = $request->kode;
            $model->nama = $request->nama;
            $model->bobot = $request->bobot;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Tahapan $model): mixed
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
        return Tahapan::findOrFail($request->id);
    }
}
