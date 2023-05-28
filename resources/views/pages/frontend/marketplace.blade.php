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

    <!-- contact area start -->
    <section class="about__area about__area--3 position-relative pb-120">
        <span class="shape shape__2 position-absolute">
            <img class="lazy" data-src="{{ asset('assets/templates/frontend2/images/shape/about-shape-2-2.png') }}"
                alt="Background Image">
        </span>
        <div class="container-fluid custom-width custom-width__2">
            @foreach ($marketplaces as $k => $marketplace)
                <div class="d-md-flex flex-row{{ ($k + 1) % 2 == 0 ? '-reverse' : '' }} mt-100">
                    <img data-src="{{ $marketplace->fotoUrl('foto_cover') }}" alt="{{ $marketplace->nama }}"
                        class="lazy foto-produk">
                    <div class="about__right about__history" style="width: -webkit-fill-available;">
                        <div class="section-heading">
                            @php
                                $url = '';
                                $url = $url == '' ? ($marketplace->link !== null ? $marketplace->link : '') : $url;
                                $url = $url == '' ? ($marketplace->link_produk !== null ? $marketplace->link_produk : '') : $url;
                                $url = $url == '' ? route('katalog', ['marketplace' => $marketplace->slug]) : $url;
                            @endphp
                            <a href="{{ $url }}" style="text-decoration: none">
                                <h2 class="title mb-25">
                                    <img class="lazy shadow-sm" data-src="{{ $marketplace->fotoUrl('foto_icon') }}"
                                        alt="{{ $marketplace->nama }}"
                                        style="margin: auto;
                                    position: relative;
                                    margin: auto;
                                    width: 45px;
                                    height: 45px;
                                    background-color: white;
                                    max-height: 45px;
                                    border-radius: 6px;
                                    object-fit: cover;
                                    object-position: center;
                                    -webkit-border-radius: 6px;
                                    -moz-border-radius: 6px;
                                    padding:2px;
                                    margin-right:12px ">{{ $marketplace->nama }}
                                </h2>
                            </a>
                            <p class="mb-0">
                                {{ $marketplace->keterangan }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- contact area end -->
@endsection


@section('stylesheet')
    <style>
        .foto-produk {
            width: 40%;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 767px) {
            .foto-produk {
                width: 100%;
            }
        }
    </style>
@endsection
