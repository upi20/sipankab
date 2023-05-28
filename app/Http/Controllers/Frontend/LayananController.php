<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Home\Testimonial;
use App\Models\Portfolio\SubKategori;
use App\Models\Tracker;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request, SubKategori $sub_kategori)
    {
        Tracker::hit();

        $page_attr = [
            'navigation' => 'layanan',
            'title' => $sub_kategori->nama,
            'image' => $sub_kategori->fotoUrl()
        ];

        $testimonials = Testimonial::getFeViewData();
        $sub_kategori->portofolios;
        $portofolios = $sub_kategori->portofolios;
        $clients = Client::getFeClientLayananData();

        $data = compact('page_attr', 'sub_kategori', 'testimonials', 'portofolios', 'clients');
        $data['compact'] = $data;
        return view('pages.frontend.layanan', $data);
    }
}
