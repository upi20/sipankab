<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Tahapan;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        // default true
        $rumus = $request->hitung === "0" ? false : true;
        $metode = in_array($request->metode, ['wp', 'saw']) ? $request->metode :  'saw';
        $params = request()->query();

        $kecamatans = Kecamatan::with(['calons'])->orderBy('nama')->get();
        $tahapans = Tahapan::orderBy('kode')->get();

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perhitungan.perhitungan');
        $data = compact('page_attr', 'view', 'kecamatans', 'rumus', 'tahapans', 'metode', 'params');
        $data['compact'] = $data;

        return view($view, $data);
    }

    public function pengumuman(Request $request)
    {
        setting_set('spk.hitung.umumkan', !is_null($request->umumkan));
        setting_set('spk.hitung.metode', $request->metode);

        return response()->json();
    }
}
