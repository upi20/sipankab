<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu\Frontend as MenuFrontend;
use App\Models\Produk\Kategori;
use App\Models\Produk\MarketPlace;
use App\Models\Produk\MarketPlaceJenis;
use App\Models\Produk\Produk;
use App\Models\Tracker;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    private $menuTitleKey = 'marketplace';
    public function index(Request $request)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;
        Tracker::hit();

        $page_attr = [
            'title' => $routeTitle,
        ];
        $marketplaces = MarketPlaceJenis::orderBy('nama')->get();

        $data = compact(
            'page_attr',
            'marketplaces',
            'routeTitle',
        );
        $data['compact'] = $data;
        return view('pages.frontend.marketplace', $data);
    }
}
