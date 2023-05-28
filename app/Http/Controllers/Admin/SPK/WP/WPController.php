<?php

namespace App\Http\Controllers\Admin\SPK\WP;

use App\Helpers\Summernote;
use App\Http\Controllers\Controller;
use App\Models\SPK\WP\WP;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class WPController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string'],
        'keterangan' => ['required', 'string'],
    ];

    private $image_folder = WP::image_folder;

    public function index(Request $request)
    {
        // jika status wp sudah jadi 2 maka alternatif dan kriteria tidak bisa di ubah
        if (request()->ajax()) {
            return WP::datatable($request);
        }
        $image_folder = $this->image_folder;
        $page_attr = adminBreadcumb(h_prefix());

        $image_folder = $this->image_folder;

        $view = path_view('pages.admin.spk.wp.wp');
        $data = compact('page_attr', 'image_folder', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function detail(Request $request, WP $spk)
    {
        $page_attr = adminBreadcumb(h_prefix(min: 1), isChild: true);
        $page_attr = [
            'title' => 'Perhitungan',
            'breadcrumbs' => $page_attr['breadcrumbs'],
            'navigation' => h_prefix(min: 1)
        ];

        $view = path_view('pages.admin.spk.wp.detail');
        $data = compact('page_attr', 'spk', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new WP();

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
            $model = WP::findOrFail($request->id);
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

    public function delete(WP $model): mixed
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
        return WP::findOrFail($request->id);
    }

    public function perhitungan(WP $spk): mixed
    {
        try {

            $page_attr = adminBreadcumb(h_prefix(min: 2), isChild: true);
            $page_attr = [
                'title' => 'Perhitungan',
                'breadcrumbs' => $page_attr['breadcrumbs'],
                'navigation' => h_prefix(min: 2)
            ];

            $perhitungan = $spk->perhitungan();
            $view = path_view('pages.admin.spk.wp.perhitungan');
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
