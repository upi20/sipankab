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

<!doctype html>
<html class="no-js" lang="en">


<head>
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
    <meta name="theme-color" content="#3482FF">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/fontawesome-free-5.15.4-web/css/fontawesome.min.css', name: 'sash') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/responsive2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/fontawesome-all.min.css') }}">
    <style>
        .scroll-wa.open {
            bottom: 80px;
        }
    </style>
    @foreach (json_decode(setting_get(set_front('meta_list'), '{}')) as $meta)
        <!-- custom {{ $meta->name }} meta-->
        {!! $meta->value !!}
    @endforeach
    @yield('stylesheet')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if ($page_attr->loader)
        <!--Preloader-->
        <div id="preloader">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon">
                        <img src="{{ asset('assets/templates/frontend/logo/LOGO CEMPOR DIGITAL-05.png') }}"
                            alt="Cempor Digital - Kreator Digital">
                    </div>
                </div>
            </div>
        </div>
        <!--Preloader-end -->
    @endif

    <!-- Custom-cursor -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>
    <!-- Custom-cursor-end -->

    <!-- Scroll-wa -->
    <div class="scroll-wa">
        <a class="text-white scroll-wa-item scroll-wa-bg-ig"
            href="https://api.whatsapp.com/send?phone=6283109547065&text=Hallo%20kak%20apa%20kabar?%20%20Saya%20Ingin%20berkonsultasi%20tentang%20%20">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="text-white scroll-wa-item scroll-wa-bg-fb"
            href="https://api.whatsapp.com/send?phone=6283109547065&text=Hallo%20kak%20apa%20kabar?%20%20Saya%20Ingin%20berkonsultasi%20tentang%20%20">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="text-white scroll-wa-item scroll-wa-bg-wa"
            href="https://api.whatsapp.com/send?phone=6283109547065&text=Hallo%20kak%20apa%20kabar?%20%20Saya%20Ingin%20berkonsultasi%20tentang%20%20">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('layouts.frontend.body.header', $compact)
    <!-- header-area-end -->

    <!-- main-area -->
    <main class="fix"> @yield('content') </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('layouts.frontend.body.footer', $compact)
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="{{ asset('assets/templates/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/jquery.parallaxScroll.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/tween-max.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/main2.js') }}"></script>
    <script src="{{ asset_admin('plugins/jquery.lazy-master/jquery.lazy.min.js', name: 'sash') }}"></script>
    <script src="{{ resource_loader('pages/frontend/frontend.js') }}"></script>
    @yield('javascript')
</body>

</html>
