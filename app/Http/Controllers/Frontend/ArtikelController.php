<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel\Artikel;
use App\Models\Artikel\Kategori;
use App\Models\Artikel\Tag;
use App\Models\Banner;
use App\Models\Menu\Frontend as MenuFrontend;
use App\Models\Tracker;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    private $menuTitleKey = 'artikel';
    public function index(Request $request)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;

        Tracker::hit();
        $page_attr = [
            'title' => $routeTitle,
        ];
        $articles = Artikel::getList($request);

        // tag and kategori
        $tags = Tag::getTopList(9);
        $categories = Kategori::getTopList(9);

        // selected
        $tag_selected = $request->tag ?
            Tag::select(['nama', 'slug'])->where('slug', '=', $request->tag)->first() : null;
        $kategori_selected = $request->kategori ?
            Kategori::select(['nama', 'slug'])->where('slug', '=', $request->kategori)->first() : null;

        $banner = Banner::getViewData();
        $data = compact(
            'page_attr',
            'articles',
            'tags',
            'categories',
            'tag_selected',
            'kategori_selected',
            'routeTitle',
            'request',
            'banner',
        );
        $data['compact'] = $data;
        return view('pages.frontend.artikel.list', $data);
    }

    public function detail(Artikel $model)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;
        Tracker::hit();
        if (request('preview') != 1) {
            if ($model->status == 0) return abort(404);
        }

        // tambah pengunjung
        $model->counter = $model->counter + 1;
        $model->save();

        //// Meta tag
        // keyword
        $keyword = $model->tagKeyword();
        $keyword = ($keyword == '') ? $model->kategoriKeyword() : ($keyword . "," . $model->kategoriKeyword());

        $page_attr = [
            'title' => $model->nama,
            'url' => route('artikel', $model->slug),
            'type' => 'article',
            'description' => $model->excerpt,
            'keywords' =>  $keyword,
            'author' => is_null($model->user) ? '' : $model->user->name,
            'navigation' => 'artikel',
            'image' => $model->fotoUrl()
        ];

        //// Artikel
        // next and prev post
        $next_post = Artikel::select(['slug'])->where('id', '<', $model->id)->first();
        $prev_post = Artikel::select(['slug'])->where('id', '>', $model->id)->first();

        //// sidebar
        // artikel popular
        $top_article = Artikel::getTopList(3);
        $article_catategory = $model->getArticleByCategory($model->categories);

        // kategori and tag
        $tags = Tag::getTopList();
        $categories = Kategori::getTopList();

        $banner = Banner::getViewData();
        // return
        return view('pages.frontend.artikel.detail', compact(
            'page_attr',
            'model',
            'next_post',
            'prev_post',
            'routeTitle',

            // sidebar
            'top_article',
            'tags',
            'categories',
            'article_catategory',
            'banner',
        ));
    }
}
