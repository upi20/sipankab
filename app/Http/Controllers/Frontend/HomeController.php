<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Tahapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $kecamatans = Kecamatan::orderBy('nama')->get();
        return view('pages.frontend.home', compact('kecamatans'));
    }

    public function kecamatan(Request $request, Kecamatan $kecamatan)
    {
        if (!setting_get('spk.hitung.umumkan')) {
            return Redirect::route('home');
        }

        $page_attr = [
            'title' => $kecamatan->nama
        ];
        $rumus = $request->hitung == 1 ? true : false;
        $metode = setting_get('spk.hitung.metode', 'saw');

        $tahapans = Tahapan::orderBy('kode')->get();
        $data = compact('page_attr', 'rumus', 'kecamatan', 'tahapans', 'metode');
        $data['compact'] = $data;
        return view('pages.frontend.perhitungan.perhitungan', $data);
    }

    public function kecamatan_semua(Request $request)
    {
        if (!setting_get('spk.hitung.umumkan')) {
            return Redirect::route('home');
        }

        $page_attr = [
            'title' => 'Semua Kecamatan'
        ];
        $rumus = $request->hitung == 1 ? true : false;
        $metode = setting_get('spk.hitung.metode', 'saw');
        $params = request()->query();

        $kecamatans = Kecamatan::with(['calons'])->orderBy('nama')->get();
        $tahapans = Tahapan::orderBy('kode')->get();
        $data = compact('page_attr', 'rumus', 'kecamatans', 'tahapans', 'params', 'metode');
        $data['compact'] = $data;
        return view('pages.frontend.perhitungan.perhitungan_semua', $data);
    }
}
