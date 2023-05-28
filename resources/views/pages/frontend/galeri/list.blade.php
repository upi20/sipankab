@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Galeri</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('') }}">Utama</a></li>
                    <li><a class="active">Galeri</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->


    <!-- Events Section start here -->
    <section class="event-section padding-tb padding-b shape-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>{{ setting_get('setting.home.galeri.title') }}</h5>
                        <h2>{{ setting_get('setting.home.galeri.sub_title') }}</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="widget widget-search">
                        <form action="{{ route('galeri') }}" method="get" class="search-wrapper">
                            <input type="text" name="search" placeholder="Masukan Kata Kunci.."
                                value="{{ request('search') }}">
                            <button type="submit"><i class="icofont-search-2"></i></button>
                        </form>
                    </div>
                    <div class="event-content">
                        <div class="event-bottom">
                            <div class="row justify-content-center">

                                @foreach ($galeries as $k => $galery)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="event-item lab-item mb-4">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <img class="lazy" data-src="{{ $galery->fotoUrl() }}"
                                                        style="width: 100%; height: 250px; object-fit: cover;"
                                                        alt="{{ $galery->nama }}">
                                                </div>
                                                <div class="lab-content">
                                                    <h5>
                                                        <a href="{{ route('galeri.detail', $galery->slug) }}">
                                                            {{ $galery->nama }}
                                                        </a>
                                                    </h5>
                                                    <ul class="lab-ul event-date">
                                                        <li><i class="icofont-calendar"></i> <span>
                                                                {{ $galery->dateFormat() }}
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-location-pin"></i> <span>
                                                                {{ $galery->lokasi }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! $galeries->links() !!}
        </div>
    </section>
    <!-- Events Section end here -->
@endsection

@section('stylesheet')
    <style>
        .card-main {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin: 3px;
        }

        .card-main:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
    </style>
@endsection
