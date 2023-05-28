@extends('layouts.frontend.master')
@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img"
        data-background="{{ asset('assets/templates/frontend2/images/bg/breadcrumb-bg-1.jpeg') }}" data-overlay="dark"
        data-opacity="5" style="height: auto;">
        <div class="shape shape__1">
            <img src="{{ asset('assets/templates/frontend2/images/shape/breadcrumb-shape-1.png') }}"
                alt="breadcrumb-shape-1.png">
        </div>
        <div class="shape shape__2">
            <img src="{{ asset('assets/templates/frontend2/images/shape/breadcrumb-shape-2.png') }}"
                alt="breadcrumb-shape-2.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title">{{ $routeTitle }} Detail</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="{{ route('home') }}"><span>Home</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="{{ route('katalog') }}"><span>{{ $routeTitle }}</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>Detail</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- product details area start -->
    <div class="product-details__area pt-120 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="product-details__wrapper">
                        <div class="pd-img">
                            <div class="tab-content" id="pdContent">
                                @foreach ($model->fotos as $k => $foto)
                                    @if ($loop->first)
                                        <div class="tab-pane fade show active" id="pd-{{ $k + 1 }}" role="tabpanel"
                                            aria-labelledby="pd-{{ $k + 1 }}-tab">
                                            <div class="big-img">
                                                <img src="{{ $foto->fotoUrl() }}" alt="{{ $foto->nama }}">
                                            </div>
                                        </div>
                                    @else
                                        <div class="tab-pane fade" id="pd-{{ $k + 1 }}" role="tabpanel"
                                            aria-labelledby="pd-{{ $k + 1 }}-tab">
                                            <div class="big-img">
                                                <img src="{{ $foto->fotoUrl() }}" alt="{{ $foto->nama }}">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </div>
                        <div class="pd-tab">
                            <nav>
                                <div class="nav" id="shop-filter-tab" role="tablist">
                                    @foreach ($model->fotos as $k => $foto)
                                        @if ($loop->first)
                                            <a class="nav-link active" id="pd-{{ $k + 1 }}-tab" data-bs-toggle="tab"
                                                href="#pd-{{ $k + 1 }}" role="tab"
                                                aria-controls="pd-{{ $k + 1 }}" aria-selected="true">
                                                <img src="{{ $foto->fotoUrl() }}" alt="{{ $foto->nama }}">
                                            </a>
                                        @else
                                            <a class="nav-link" id="pd-{{ $k + 1 }}-tab" data-bs-toggle="tab"
                                                href="#pd-{{ $k + 1 }}" role="tab"
                                                aria-controls="pd-{{ $k + 1 }}" aria-selected="true">
                                                <img src="{{ $foto->fotoUrl() }}" alt="{{ $foto->nama }}">
                                            </a>
                                        @endif
                                    @endforeach

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="product-details__content">
                        <div class="tr-wrapper d-flex align-items-center justify-content-between">
                            <h2 class="title">{{ $model->nama }}</h2>
                            @if ($model->rating > 0)
                                <div class="rating-wrapper d-flex align-items-center justify-content-center">
                                    <div class="rattings d-flex align-items-center">
                                        @for ($i = $model->rating; $i >= 1; $i--)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @for ($i = 5 - $model->rating; $i >= 1; $i--)
                                            <i class="fal fa-star"></i>
                                        @endfor
                                    </div>
                                    <span class="rt-number">{{ $model->rating }} - {{ $model->rating_nama }}</span>
                                </div>
                            @endif
                        </div>
                        <p>{{ $model->kilasan }}</p>
                        @if ($model->tampilkan_harga == 1)
                            <div class="pp__price pp__price--2 pp__price--list d-flex align-items-center">
                                @if ($model->harga_diskon > 0)
                                    <h3 class="price">
                                        {{ format_rupiah($model->harga_diskon) }}
                                        <span class="regular">
                                            <del>{{ format_rupiah($model->harga) }}</del>
                                        </span>
                                    </h3>
                                @else
                                    <h3 class="price">{{ format_rupiah($model->harga) }}</h3>
                                @endif
                            </div>
                        @endif
                        @if ($marketplaces_order->count())
                            <hr>
                            <div class="pd-social-wrapper">
                                <span class="share"><i class="fas fa-store"></i> Tersedia di:</span>
                                <div class="social-links d-flex align-items-center">
                                    @foreach ($marketplaces_order as $marketplace)
                                        @php
                                            $url = $marketplace->link !== null ? $marketplace->link : '';
                                            $url = $url == '' ? ($marketplace->jenis->link_produk !== null ? $marketplace->jenis->link_produk : '') : $url;
                                            $url = $url == '' ? ($marketplace->jenis->link !== null ? $marketplace->jenis->link : '') : $url;
                                        @endphp
                                        <a href="{{ $url }}" target="_blank" style="border:none">
                                            <img class="lazy shadow-sm"
                                                data-src="{{ $marketplace->jenis->fotoUrl('foto_icon') }}"
                                                alt="{{ $marketplace->jenis->nama }}"
                                                style="margin: auto;
                                                position: relative;
                                                margin: auto;
                                                width: 35px;
                                                height: 35px;
                                                padding: 2px;
                                                background-color: white;
                                                max-height: 35px;
                                                border-radius: 4px;
                                                object-fit: cover;
                                                object-position: center;
                                                -webkit-border-radius: 4px;
                                                -moz-border-radius: 4px;">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details area end -->

    <!-- product info start -->
    <div class="container">
        <h2 class="title">Informasi Lainnya</h2>
        {!! $model->informasi_lain !!}

        <div class="product-details__content ps-0">
            <div class="pd-social-wrapper mt-3">
                <span class="share"><i class="fas fa-share"></i> Bagikan Ke Sosial Media</span>
                <div class="social-links d-flex align-items-center">
                    <div class="d-flex x-gap-15">
                        <a target="_blank"
                            href="https://www.facebook.com/sharer.php?u={{ route('katalog', $model->slug) }}"
                            title="Share To Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?text={{ route('katalog', $model->slug) }} {{ $model->nama }}"
                            title="Share To Whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a target="_blank"
                            href="https://twitter.com/share?url={{ route('katalog', $model->slug) }}&text={{ $model->nama }}"
                            title="Share To Twitter">
                            <i class="fab fa-twitter"></i></a>
                        <a target="_blank"
                            href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('katalog', $model->slug) }}&title={{ $model->nama }}&summary={{ $model->excerpt }}"
                            title="Share To Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a target="_blank"
                            href="https://pinterest.com/pin/create/button/?url={{ route('katalog', $model->slug) }}&media={{ asset($model->foto) }}&description={{ $model->nama }}"
                            title="Share To Pinterest">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a target="_blank"
                            href="https://telegram.me/share/url?url={{ route('katalog', $model->slug) }}&text={{ $model->nama }}"
                            title="Share To Telegram">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                        <a target="_blank"
                            href="mailto:?subject={{ $model->nama }}&body=Check out this site: {{ route('katalog', $model->slug) }}"
                            title="Share by Email';" title="Share Via Email">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product info end -->

    <!-- releted products area start -->
    <div class="releted-product__area pt-100 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="rp-title mb-30">
                        Produk lainnya
                    </h2>
                </div>
            </div>
            <div class="row mt-none-30">

                @foreach ($related_produk as $produk)
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                        <div class="pp__item pp__item--2 text-center pt-20 pb-20">
                            <div class="pp__thumb pp__thumb--2 mt-35">
                                @if (isset($produk->fotos[0]))
                                    <img class="default" src="{{ $produk->fotos[0]->fotoUrl() }}"
                                        alt="{{ $produk->fotos[0]->nama }}" style="max-height: 145px;">
                                @endif
                                @if (isset($produk->fotos[1]))
                                    <img class="on-hover" src="{{ $produk->fotos[1]->fotoUrl() }}"
                                        alt="{{ $produk->fotos[1]->nama }}" style="max-height: 145px;">
                                @endif
                            </div>
                            <div class="pp__content pp__content--2 mt-25">
                                <div class="pp__c-top d-flex align-items-center justify-content-center">
                                    <div class="pp__cat pp__cat--2">
                                        <a href="{{ route('katalog.detail', $produk->slug) }}">
                                            {{ $produk->nama }}
                                        </a>
                                    </div>
                                </div>
                                <h4 class="pp__title pp__title--2">
                                    <a href="{{ route('katalog', ['kategori' => $produk->kategori->slug]) }}">
                                        {{ $produk->kategori->nama }}
                                    </a>
                                </h4>
                                @if ($produk->tampilkan_harga == 1)
                                    <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                        <h6 class="label">Harga - </h6>
                                        @if ($produk->harga_diskon > 0)
                                            <span class="price">
                                                {{ format_rupiah($produk->harga_diskon) }} /
                                                <span class="regular">
                                                    <del>{{ format_rupiah($produk->harga) }}</del>
                                                </span>
                                            </span>
                                        @else
                                            <span class="price">
                                                {{ format_rupiah($produk->harga) }}
                                            </span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- releted products area end -->
@endsection
