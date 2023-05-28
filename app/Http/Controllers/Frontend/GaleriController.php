<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Tracker;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        Tracker::hit();
        $params = Galeri::getParams($request);
        $galeries = Galeri::get($request, 6, $params);
        $filters = (object)[
            'search' => $request->search
        ];

        $foto = isset($galeries[0]) ? $galeries[0]->fotoUrl() : false;

        $page_attr = [
            'title' => 'Galeri',
            'url' => route('galeri'),
            'image' => $foto,
        ];

        return view('pages.frontend.galeri.list', compact(
            'galeries',
            'filters',
            'page_attr',
        ));
    }

    public function detail(Galeri $model)
    {
        Tracker::hit();
        $page_attr = [
            'navigation' => 'galeri',
            'loader' => false,
            'title' => $model->nama,
            'description' => $model->keterangan,
            'url' => route('galeri.detail', $model->slug),
            'keywords' =>  'Galeri Kegiatan, Galeri, Kegiatan, ' . $model->nama,
            'image' => $model->fotoUrl(),
        ];

        return view('pages.frontend.galeri.detail', compact('page_attr', 'model'));
    }
}
