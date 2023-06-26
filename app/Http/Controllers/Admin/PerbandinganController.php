<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Tahapan;
use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    public function index(Request $request)
    {
        // default true
        $rumus = $request->hitung === "1" ? true : false;
        $params = request()->query();

        $kecs = Kecamatan::with(['calons'])->orderBy('nama')->get();
        $tahapans = Tahapan::orderBy('kode')->get();
        $asu = 1;

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perbandingan');
        $perbandingan = true;
        $kecamatans = [];
        $deviasi = ['wp' => 0, 'saw' => 0];
        foreach ($kecs as $kecamatan) {
            $kecamatan->wp = $kecamatan->wp();
            $kecamatan->wp_deviasi = $kecamatan->wp[3]['total_deviasi'];
            $deviasi['wp'] += $kecamatan->wp_deviasi;

            $kecamatan->saw = $kecamatan->saw();
            $kecamatan->saw_deviasi = $kecamatan->saw[3]['total_deviasi'];
            $deviasi['saw'] += $kecamatan->saw_deviasi;

            $kecamatans[] = $kecamatan;
        }
        $kecamatans = collect($kecamatans);

        $data = compact('page_attr', 'view', 'kecamatans', 'rumus', 'tahapans',  'params', 'perbandingan', 'deviasi');
        $data['compact'] = $data;

        return view($view, $data);
    }
}
