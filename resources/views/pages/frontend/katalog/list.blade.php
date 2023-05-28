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
                    <h2 class="page-title">{{ $routeTitle }}</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="{{ route('home') }}"><span>Home</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>{{ $routeTitle }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- blog area start -->
    <div class="blog-area pt-120 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-filter-wrapper d-flex justify-content-between align-items-center mb-30">
                        <div class="sf-left">
                            <div class="show-text">
                                <span>Menampilkan <b>{{ $attr->from }}</b>
                                    Sampai <b>{{ $attr->to }}</b>
                                    dari <b>{{ $attr->total }}</b>
                                </span>
                            </div>
                        </div>
                        <div class="sf-right d-flex justify-content-end align-items-center">
                            <nav>
                                <div class="nav" id="shop-filter-tab" role="tablist">
                                    <a class="nav-link active" id="shop-tab-1-tab" data-bs-toggle="tab" href="#shop-tab-1"
                                        role="tab" aria-controls="shop-tab-1" aria-selected="true"><i
                                            class="fas fa-th"></i></a>
                                    <a class="nav-link" id="shop-tab-2-tab" data-bs-toggle="tab" href="#shop-tab-2"
                                        role="tab" aria-controls="shop-tab-2" aria-selected="false"><i
                                            class="fas fa-list-ul"></i></a>
                                </div>
                            </nav>
                            <div class="sort-wrapper ml-45">
                                @php
                                    $rQuery = $request->query();
                                    if (isset($rQuery['order_by'])) {
                                        unset($rQuery['order_by']);
                                    }
                                @endphp
                                <form action="{{ route('katalog', $rQuery) }}" method="GET">
                                    <select name="order_by" id="order_by" onchange="this.form.submit()">
                                        <option value="latest" {{ $request->order_by == 'latest' ? 'selected' : '' }}>
                                            Terbaru
                                        </option>
                                        <option value="longest" {{ $request->order_by == 'longest' ? 'selected' : '' }}>
                                            Terlama
                                        </option>
                                        <option value="asc" {{ $request->order_by == 'asc' ? 'selected' : '' }}>
                                            Nama A-Z
                                        </option>
                                        <option value="desc" {{ $request->order_by == 'desc' ? 'selected' : '' }}>
                                            Nama Z-A
                                        </option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-5">
                    <div class="tab-content" id="shop-tabContent">
                        <div class="tab-pane fade show mt-none-30 active" id="shop-tab-1" role="tabpanel"
                            aria-labelledby="shop-tab-1-tab">
                            <div class="row">
                                @foreach ($produks as $produk)
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <a href="{{ route('katalog.detail', $produk->slug) }}">
                                            <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                                <div class="pp__thumb pp__thumb--2 mt-35">
                                                    @if (isset($produk->fotos[0]))
                                                        <img class="default" src="{{ $produk->fotos[0]->fotoUrl() }}"
                                                            alt="{{ $produk->fotos[0]->nama }}">
                                                    @endif
                                                    @if (isset($produk->fotos[1]))
                                                        <img class="on-hover" src="{{ $produk->fotos[1]->fotoUrl() }}"
                                                            alt="{{ $produk->fotos[1]->nama }}">
                                                    @endif
                                                </div>
                                                <div class="pp__content pp__content--2 mt-25">
                                                    <div class="pp__c-top d-flex align-items-center justify-content-center">
                                                        <div class="pp__cat pp__cat--2">
                                                            @php
                                                                $rQuery = $request->query();
                                                                if (isset($rQuery['kategori'])) {
                                                                    unset($rQuery['kategori']);
                                                                }
                                                            @endphp
                                                            <a
                                                                href="{{ route('katalog', array_merge($rQuery, ['kategori' => $produk->kategori->slug])) }}">
                                                                {{ $produk->kategori->nama }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h4 class="pp__title pp__title--2">
                                                        <a href="{{ route('katalog.detail', $produk->slug) }}">
                                                            {{ $produk->nama }}
                                                        </a>
                                                    </h4>
                                                    @if ($produk->tampilkan_harga == 1)
                                                        <div
                                                            class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                                            <h6 class="label">Harga - </h6>
                                                            @if ($produk->harga_diskon > 0)
                                                                <span class="price">
                                                                    {{ format_rupiah($produk->harga_diskon) }} /
                                                                    <span class="regular">
                                                                        <del>{{ format_rupiah($produk->harga) }}</del>
                                                                    </span>
                                                                </span>
                                                            @else
                                                                <span
                                                                    class="price">{{ format_rupiah($produk->harga) }}</span>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade mt-none-30" id="shop-tab-2" role="tabpanel"
                            aria-labelledby="shop-tab-2-tab">
                            <div class="row">
                                @foreach ($produks as $produk)
                                    <div class="col-xl-12 mt-30">
                                        <div class="pp__item pp__item--2 pp__item--list active text-center pt-30 pb-25">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="pp__thumb pp__thumb--2 pp__thumb--list m-0">
                                                        @if (isset($produk->fotos[0]))
                                                            <img class="default" src="{{ $produk->fotos[0]->fotoUrl() }}"
                                                                alt="{{ $produk->fotos[0]->nama }}"
                                                                style="max-height: 145px;">
                                                        @endif
                                                        @if (isset($produk->fotos[1]))
                                                            <img class="on-hover"
                                                                src="{{ $produk->fotos[1]->fotoUrl() }}"
                                                                alt="{{ $produk->fotos[1]->nama }}"
                                                                style="max-height: 145px;">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="pp__content pp__content--2 pp__content--list m-0">
                                                        <div class="pp__c-top d-flex align-items-center">
                                                            <div class="pp__cat pp__cat--2">
                                                                @php
                                                                    $rQuery = $request->query();
                                                                    if (isset($rQuery['kategori'])) {
                                                                        unset($rQuery['kategori']);
                                                                    }
                                                                @endphp
                                                                <a
                                                                    href="{{ route('katalog', ['kategori' => $produk->kategori->slug]) }}">
                                                                    {{ $produk->kategori->nama }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <h4 class="pp__title pp__title--2 pp__title--list">
                                                            <a href="{{ route('katalog.detail', $produk->slug) }}">
                                                                {{ $produk->nama }}
                                                            </a>
                                                        </h4>
                                                        @if ($produk->tampilkan_harga == 1)
                                                            <div
                                                                class="pp__price pp__price--2 pp__price--list d-flex align-items-center">
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

                                                        <p class="fw-normal text-start">
                                                            {{ $produk->kilasan }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Pagination --}}
                    {!! $produks->links() !!}

                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar blog__sidebar--shop mt-none-30">
                        <div class="widget mt-30">
                            <h2 class="title">Pencarian</h2>
                            @php
                                $rQuery = unsetByKey($request->query(), ['search', 'page']);
                            @endphp
                            <form action="{{ route('katalog', $rQuery) }}" class="search-widget" method="GET">
                                @foreach ($rQuery ?? [] as $name => $value)
                                    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                                @endforeach
                                <input type="search" name="search" id="search" placeholder="Kata Kunci"
                                    value="{{ request()->search }}">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                            @if (count($request->query()) > 0)
                                <a href="{{ route('katalog') }}" class="btn btn-secondary mt-1">Reset</a>
                            @endif
                        </div>

                        {{-- kategori --}}
                        @if ($categories->count())
                            <div class="widget mt-30">
                                <h2 class="title">Kategori</h2>
                                <ul>
                                    @foreach ($categories as $kategori)
                                        @php
                                            $is_active = $kategori_selected ? $kategori_selected->slug == $kategori->slug : false;
                                            $rQuery = unsetByKey($request->query(), ['kategori']);
                                        @endphp
                                        <li class="{{ $is_active ? 'bg-dark' : '' }} cat-item">
                                            <a href="{{ route('katalog', $is_active ? $rQuery : array_merge($rQuery, ['kategori' => $kategori->slug])) }}"
                                                class="{{ $is_active ? 'text-white' : '' }}">
                                                {{ $kategori->nama }}
                                            </a>
                                            <span class="{{ $is_active ? 'text-white' : '' }}">
                                                {{ $kategori->produk }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- kategori --}}
                        @if ($marketplaces->count())
                            <div class="widget mt-30">
                                <h2 class="title">Marketplace</h2>
                                <ul>
                                    @foreach ($marketplaces as $marketplace)
                                        @php
                                            $is_active = $marketplace_selected ? $marketplace_selected->slug == $marketplace->slug : false;
                                            $rQuery = unsetByKey($request->query(), ['marketplace']);
                                        @endphp
                                        <li class="{{ $is_active ? 'bg-dark' : '' }} cat-item">
                                            <a href="{{ route('katalog', $is_active ? $rQuery : array_merge($rQuery, ['marketplace' => $marketplace->slug])) }}"
                                                class="{{ $is_active ? 'text-white' : '' }}">
                                                {{ $marketplace->nama }}
                                            </a>
                                            <span class="{{ $is_active ? 'text-white' : '' }}">
                                                {{ $marketplace->produk }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($banner !== null)
                            <div class="widget border-0 p-0 mt-30">
                                <div class="widget_media_image">
                                    <img src="{{ $banner->fotoUrl() }}" alt="{{ $banner->nama }}">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
@endsection
