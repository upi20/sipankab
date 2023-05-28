@extends('layouts.frontend.master')
@section('content')
    @php
        $anim = 1;
    @endphp
    <section data-anim="fade" class="breadcrumbs " data-anim-wrap>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__item " data-anim-child="slide-right delay-{{ $anim++ }}">
                            <a href="{{ route('home') }}">Home</a>
                        </div>
                        <div class="breadcrumbs__item " data-anim-child="slide-right delay-{{ $anim++ }}">
                            <a href="javascript:void(0)">Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $anim = 1;
    @endphp
    <section class="page-header -type-1" data-anim-wrap>
        <div class="container">
            <div class="page-header__content">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">
                            <h1 class="page-header__title">{{ setting_get('setting.produk.produk_title') }}</h1>
                        </div>
                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text">{{ setting_get('setting.produk.produk_sub_title') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $anim = 1;
    @endphp
    <section class="layout-pb-md">
        <div data-anim-wrap class="container">
            <div class="tabs -pills js-tabs">
                <div data-anim-child="slide-up delay-1" class="tabs__controls d-flex justify-center js-tabs-controls">
                    <div>
                        <a href="{{ url('produk') }}" data-anim-child="slide-up delay-{{ $anim++ }}"
                            class="tabs__button px-15 py-8 rounded-8  {{ $kategori_selected == null ? 'is-active' : '' }}">
                            Semua Kategori
                        </a>
                        @foreach ($kategories as $kategori)
                            @php
                                $selected_id = is_null($kategori_selected) ? null : $kategori_selected->id;
                                $is_active = $selected_id == $kategori->id ? 'is-active' : '';
                            @endphp
                            <a href="{{ url('produk?kategori=' . $kategori->slug) }}"
                                class="tabs__button px-15 py-8 rounded-8  {{ $is_active }}">
                                {{ $kategori->nama }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $anim = 1;
    @endphp
    <section class="layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-30 justify-center">
                @foreach ($produks as $produk)
                    <div data-anim-child="slide-up delay-{{ $anim++ }}" class="col-lg-10 col-md-11">
                        <div class="blogCard -type-3">
                            <div class="row y-gap-30 items-center">
                                <div class="col-lg-6">
                                    <div class="blogCard__image">
                                        <img {{-- style="margin: auto; position: relative; margin: auto; width: 350px; height: 200px; border-radius: 4px; object-fit: cover; object-position: center;" --}} class="rounded-8"
                                            src="{{ asset("$produk_folder/$produk->foto") }}" alt="{{ $produk->nama }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="blogCard__content pl-60 lg:pl-40 md:pl-0">
                                        @if (!is_null($produk->kategori))
                                            <a href="{{ url('produk?kategori=' . $produk->kategori->slug) }}"
                                                class="blogCard__category text-14 lh-1 text-purple-1 fw-500">{{ $produk->kategori->nama }}</a>
                                        @endif
                                        <h4 class="blogCard__title text-24 lh-15 text-dark-4 fw-500 mt-15">
                                            {{ $produk->nama }}
                                        </h4>
                                        <p class="blogCard__text mt-20">{{ $produk->keterangan }}</p>
                                        <div class="blogCard__button d-inline-block mt-20">
                                            <a target="_blank"
                                                href="https://api.whatsapp.com/send?phone={{ setting_get('setting.produk.no_whatsapp') }}&text=Saya tertarik dengan {{ $produk->nama }}"
                                                class="button -sm -purple-3 text-purple-1">
                                                <i class="fab fa-whatsapp text-success me-1" style="font-size: 1.5em"></i>
                                                Whatsapp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {!! $produks->links() !!}
        </div>
    </section>
@endsection
