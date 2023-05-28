<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel\Artikel;
use App\Models\Contact\FAQ;
use App\Models\Galeri;
use App\Models\Home\KataKata;
use App\Models\Home\Pengurus;
use App\Models\Home\ProgramPembelajaran;
use App\Models\Home\Testimonial;
use App\Models\Portfolio\Portfolio;
use App\Models\Produk\Produk;
use App\Models\Setting\HomeSlider;
use App\Models\Tracker;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        Tracker::hit();

        $page_attr = [
            'navigation' => 'home',
        ];

        $testimonials = Testimonial::getFeViewData();
        $sliders = HomeSlider::getFeViewData();
        $kata_katas = KataKata::getFeViewData();
        $produks = Produk::getFeHomeData();
        $program_pembelajarans = ProgramPembelajaran::getFeViewData();

        if ($this->checkVisible('artikel')) {
            $articles = Artikel::getHomeViewData();
        } else {
            $articles = [];
        }

        if ($this->checkVisible('galeri')) {
            $galeries = Galeri::getHomeViewData();
        } else {
            $galeries = [];
        }

        if ($this->checkVisible('pengurus')) {
            $penguruses = Pengurus::getHomeViewData();
        } else {
            $penguruses = [];
        }

        $faqs = FAQ::getFeViewData();
        $portofolios = Portfolio::getFeHomeData();

        $data = compact(
            'testimonials',
            'faqs',
            'galeries',
            'articles',
            'page_attr',
            'kata_katas',
            'program_pembelajarans',
            'penguruses',
            'portofolios',
            'sliders',
        );
        $data['compact'] = $data;
        return view('pages.frontend.home.index', $data);
    }

    private function checkVisible(string $item): ?bool
    {
        return setting_get("setting.home.$item.visible", false);
    }

    public function fronted2(Request $request)
    {
        return view('layouts.frontend.index');
    }

    public function portfolio_detail(Request $request)
    {
        $slug = $request->key;

        $portfolio = Portfolio::with(['items' => function ($query) {
            $query->orderBy('urutan');
        }])->where('slug', $slug)->first();

        if ($portfolio) {
            $portfolio->foto_url = $portfolio->fotoUrl();

            $items = [];
            foreach ($portfolio->items ?? [] as $item) {
                $items[] = [
                    'nama' => $item->nama,
                    'keterangan' => $item->keterangan,
                ];
            }

            $result = [
                'foto_url' => $portfolio->foto_url,
                'nama' => $portfolio->nama,
                'keterangan' => $portfolio->keterangan,
                'items' =>  $items
            ];
            return $result;
        } else {
            return response()->json(status: 404);
        }
    }
}
