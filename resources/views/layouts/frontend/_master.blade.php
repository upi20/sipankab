<?php
$page_attr = (object) [
    'title' => isset($page_attr['title']) ? $page_attr['title'] : '',
    'description' => isset($page_attr['description']) ? $page_attr['description'] : setting_get(set_front('meta.description')),
    'keywords' => isset($page_attr['keywords']) ? $page_attr['keywords'] : setting_get(set_front('meta.keyword')),
    'author' => isset($page_attr['author']) ? $page_attr['author'] : setting_get(set_front('meta.author')),
    'image' => isset($page_attr['image']) ? $page_attr['image'] : asset(setting_get(set_front('meta.image'))),
    'navigation' => isset($page_attr['navigation']) ? $page_attr['navigation'] : false,
    'loader' => isset($page_attr['loader']) ? $page_attr['loader'] : setting_get(set_front('app.preloader')),
    'breadcrumbs' => isset($page_attr['breadcrumbs']) ? (is_array($page_attr['breadcrumbs']) ? $page_attr['breadcrumbs'] : false) : false,
    'url' => isset($page_attr['url']) ? $page_attr['url'] : url(''),
    'type' => isset($page_attr['type']) ? $page_attr['type'] : 'website',
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . setting_get(set_front('app.title'), env('APP_NAME'));
$search_master_key = isset($_GET['search']) ? $_GET['search'] : '';

$getSosmed_val = feSocialMedia();
$notifikasi = feTopNotification();
$feKontakLists = feKontakList();
$footerArtikels = \App\Models\Artikel\Artikel::getFooterViewData();

$compact = isset($compact) ? $compact : [];
$compact = array_merge($compact, compact('page_attr_title', 'search_master_key', 'notifikasi', 'page_attr', 'getSosmed_val', 'feKontakLists', 'footerArtikels'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#8dc63f">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- SEO -->
    <!-- Primary Meta Tags -->
    <title>{{ $page_attr_title }}</title>
    <meta name="description" content="{{ $page_attr->description }}">
    <meta name="author" content="{{ $page_attr->author }}">
    <meta name="keywords" content="{{ $page_attr->keywords }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ $page_attr->url }}">
    <meta property="og:type" content="{{ $page_attr->type }}">
    <meta property="og:title" content="{{ $page_attr_title }}">
    <meta property="og:description" content="{{ $page_attr->description }}">
    <meta property="og:image" content="{{ $page_attr->image }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $page_attr->url }}">
    <meta name="twitter:title" content="{{ $page_attr_title }}">
    <meta name="twitter:description" content="{{ $page_attr->description }}">
    <meta name="twitter:image" content="{{ $page_attr->image }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $page_attr_title }}">
    <meta itemprop="description" content="{{ $page_attr->description }}">
    <meta itemprop="image" content="{{ $page_attr->image }}">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/templates/frontend2/images/x-icon/01.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/templates/frontend2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend2/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend2/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend2/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset_admin('plugins/fontawesome-free-5.15.4-web/css/fontawesome.min.css') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#26B683">

    @foreach (json_decode(setting_get(set_front('meta_list'), '{}')) as $meta)
        <!-- custom {{ $meta->name }} meta-->
        {!! $meta->value !!}
    @endforeach
    @yield('stylesheet')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @if ($page_attr->loader)
        <!-- preloader start here -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader ending here -->
    @endif

    @include('layouts.frontend.body._header', $compact)


    <main> @yield('content') </main>


    @include('layouts.frontend.body._footer', $compact)

    <!-- scrollToTop start here -->
    <a href="javascript:void(0)" class="scrollToTop">
        <i class="icofont-bubble-up"></i>
        <span class="pluse_1"></span>
        <span class="pluse_2"></span>
    </a>
    <!-- scrollToTop ending here -->

    <script src="{{ asset('assets/templates/frontend2/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend2/js/functions.js') }}"></script>
    <script src="{{ asset_admin('plugins/fontawesome-free-5.15.4-web/js/all.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/jquery.lazy-master/jquery.lazy.min.js') }}"></script>
    <script src="{{ resource_loader('pages/frontend/frontend.js') }}"></script>
    @yield('javascript')
</body>

</html>
