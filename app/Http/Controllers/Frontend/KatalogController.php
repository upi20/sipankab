<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel\Artikel;
use App\Models\Artikel\Tag;
use App\Models\Banner;
use App\Models\Menu\Frontend as MenuFrontend;
use App\Models\Produk\Kategori;
use App\Models\Produk\MarketPlace;
use App\Models\Produk\MarketPlaceJenis;
use App\Models\Produk\Produk;
use App\Models\Tracker;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    private $menuTitleKey = 'katalog';
    public function index(Request $request)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;

        Tracker::hit();
        $page_attr = [
            'title' => $routeTitle,
        ];
        $produks = Produk::getList($request);
        // marketplace and kategori
        $marketplaces = MarketPlaceJenis::getTopList(null);
        $categories = Kategori::getTopList(6);

        // selected
        $marketplace_selected = $request->marketplace ?
            MarketPlaceJenis::select(['nama', 'slug'])->where('slug', '=', $request->marketplace)->first() : null;
        $kategori_selected = $request->kategori ?
            Kategori::select(['nama', 'slug'])->where('slug', '=', $request->kategori)->first() : null;
        $attr = json_decode(json_encode($produks));

        $banner = Banner::getViewData();

        $data = compact(
            'page_attr',
            'produks',
            'marketplaces',
            'categories',
            'marketplace_selected',
            'kategori_selected',
            'routeTitle',
            'request',
            'attr',
            'banner',
        );
        $data['compact'] = $data;
        return view('pages.frontend.katalog.list', $data);
    }

    public function detail(Produk $model)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;
        Tracker::hit();

        $page_attr = [
            'title' => $model->nama,
            'url' => route('katalog', $model->slug),
            'description' => $model->kilasan,
            'navigation' => 'katalog',
        ];

        if (isset($model->fotos[0])) {
            $page_attr['image'] = $model->fotos[0]->fotoUrl();
        }

        //// related
        $related_produk = $model->getByCategory($model->kategori_id);

        // marketplaces_order
        $marketplaces_order = $model->marketplaces()->with(['jenis' => function ($query) {
            $query->orderBy('nama');
        }])->get();

        // return
        return view('pages.frontend.katalog.detail', compact(
            'page_attr',
            'model',
            'routeTitle',
            'marketplaces_order',
            'related_produk',
        ));
    }
}
