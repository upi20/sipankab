<?php

namespace App\Http\Controllers\Admin\SPK\SAW;

use App\Helpers\Summernote;
use App\Http\Controllers\Controller;
use App\Models\SPK\SAW\SAW;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class SAWController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string'],
        'keterangan' => ['required', 'string'],
    ];

    private $image_folder = SAW::image_folder;

    public function index(Request $request)
    {
        // jika status saw sudah jadi 2 maka alternatif dan kriteria tidak bisa di ubah
        if (request()->ajax()) {
            return SAW::datatable($request);
        }
        $image_folder = $this->image_folder;
        $page_attr = adminBreadcumb(h_prefix());

        $image_folder = $this->image_folder;

        $view = path_view('pages.admin.spk.saw.saw');
        $data = compact('page_attr', 'image_folder', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function detail(Request $request, SAW $spk)
    {
        $page_attr = adminBreadcumb(h_prefix(min: 1), isChild: true);
        $page_attr = [
            'title' => 'Perhitungan',
            'breadcrumbs' => $page_attr['breadcrumbs'],
            'navigation' => h_prefix(min: 1)
        ];

        $view = path_view('pages.admin.spk.saw.detail');
        $data = compact('page_attr', 'spk', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new SAW();

            $keterangan = Summernote::update($request->keterangan, $this->image_folder, '');
            $model->keterangan = $keterangan->html;
            $model->nama = $request->nama;
            // $model->status = $request->status;
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
            $model = SAW::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));


            $keterangan = Summernote::update($request->keterangan, $this->image_folder, '');
            $model->keterangan = $keterangan->html;
            $model->nama = $request->nama;
            // // $model->status = $request->status;
            $model->save();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(SAW $model): mixed
    {
        try {
            Summernote::delete($model->keterangan);
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
        return SAW::findOrFail($request->id);
    }

    public function perhitungan(SAW $spk): mixed
    {
        try {

            $page_attr = adminBreadcumb(h_prefix(min: 2), isChild: true);
            $page_attr = [
                'title' => 'Perhitungan',
                'breadcrumbs' => $page_attr['breadcrumbs'],
                'navigation' => h_prefix(min: 2)
            ];

            $perhitungan = $spk->perhitungan();
            $view = path_view('pages.admin.spk.saw.perhitungan');
            $data = compact('page_attr', 'spk', 'perhitungan', 'view');
            $data['compact'] = $data;
            return view($view, $data);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }
}
