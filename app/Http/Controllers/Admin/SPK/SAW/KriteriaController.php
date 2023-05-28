<?php

namespace App\Http\Controllers\Admin\SPK\SAW;

use App\Http\Controllers\Controller;
use App\Models\SPK\SAW\SAW;
use App\Models\SPK\SAW\Kriteria;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class KriteriaController extends Controller
{
    private $validate_model = [
        'spk_id' => ['required', 'integer'],
        'nama' => ['required', 'string'],
        'kode' => ['required', 'string'],
        'bobot' => ['required', 'string'],
    ];

    public function index(Request $request, SAW $spk)
    {
        $page_attr = adminBreadcumb(h_prefix(min: 2), isChild: true);
        $page_attr = [
            'title' => 'Kriteria',
            'breadcrumbs' => $page_attr['breadcrumbs'],
            'navigation' => h_prefix(min: 2)
        ];

        $view = path_view('pages.admin.spk.saw.kriteria');
        $data = compact('page_attr', 'spk', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Kriteria();
            $model->spk_id = $request->spk_id;
            $model->nama = $request->nama;
            $model->kode = $request->kode;
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
            $model = Kriteria::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->spk_id = $request->spk_id;
            $model->nama = $request->nama;
            $model->kode = $request->kode;
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

    public function delete(Kriteria $model): mixed
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
        return Kriteria::findOrFail($request->id);
    }

    public function datatable(Request $request)
    {
        return Kriteria::datatable($request);
    }
}
