@extends('layouts.frontend.master')
@section('content')
    <!-- developr-area -->
    <section class="developr-area-two pb-120 pt-175">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="developr-img">
                        <img class="lazy" data-src="{{ $sub_kategori->fotoUrl() }}" alt="{{ $sub_kategori->nama }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="developr-content-two">
                        <div class="section-title title-style-two mb-20">
                            <h2 class="title">{!! $sub_kategori->judul !!}</h2>
                        </div>
                        <p>{!! $sub_kategori->sub_judul !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- developr-area-end -->

    @if ($sub_kategori->tampilkan_client)
        <section class="client-area pt-120  pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-two text-center mb-55">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                </div>
                <div class="row brand-active">
                    @foreach ($clients as $client)
                        <div class="col-12">
                            <div class="brand-item">
                                <img class="lazy" data-src="{!! $client->fotoUrl() !!}" alt="{{ $client->nama }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($portofolios->count())
        <section class="inner-project-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-65">
                            <h2 class="title">Out Portofolios</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-project-item-wrap">
                    <div class="row justify-content-center">
                        @foreach ($portofolios as $portofolio)
                            <div class="col-lg-4 col-md-6">
                                <div class="inner-project-item">
                                    <div class="inner-project-thumb">
                                        <a href="javascript:void(0)"
                                            onclick="portofolioDetail('.btnPortofolio-{{ $portofolio->slug }}','{{ $portofolio->slug }}')">
                                            <img src="{{ $portofolio->fotoUrl() }}" alt="{{ $portofolio->nama }}"
                                                style="height: 250px; width:100%; object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="inner-project-content"
                                        onclick="portofolioDetail('.btnPortofolio-{{ $portofolio->slug }}','{{ $portofolio->slug }}')">
                                        <h3 class="title">
                                            <a href="javascript:void(0)"
                                                onclick="portofolioDetail('.btnPortofolio-{{ $portofolio->slug }}','{{ $portofolio->slug }}')">
                                                {{ $portofolio->nama }}
                                            </a>
                                        </h3>
                                        <p>{{ $portofolio->keterangan }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @php $k = "setting.home.testimonial"; @endphp
    @if ($sub_kategori->tampilkan_testimoni && $portofolios)
        @include('pages.frontend.home._testimonial', array_merge($compact, ['k' => $k]))
    @endif

    @if ($sub_kategori->keterangan)
        <section class="inner-project-area">
            <div class="container">
                {!! $sub_kategori->keterangan !!}
            </div>
        </section>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="portfolioModal" aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-body p-lg-5">
                    <button type="button" class="portfolio-section btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="row">
                        <div class="col-xl-12">
                            <img src="" alt="icon" style="border-radius: 12px; width:100%" class="mb-4"
                                id="portfolioModalFoto">
                        </div>
                        <div class="col-xl-6">
                            <div class="content-wrapper">
                                <h2 class="item-title h4" id="portfolioModalNama"></h2>
                                <p id="portfolioModalKeterangan">
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="meta-wrapper">
                                <ul class="item-meta p-0" id="portfolioModalItems"> </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="{{ resource_loader('pages/frontend/home', type: 'css') }}">
@endsection
@section('javascript')
    <script src="{{ resource_loader('pages/frontend/home.js') }}"></script>
@endsection
