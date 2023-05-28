@extends('layouts.frontend.master')
@section('content')
    @php
        $p = 'setting.home';
        $k = "$p.hero";
    @endphp
    @if (setting_get("$k.visible"))
        <!-- Hero section start here -->
        <section class="about-section padding-tb shape-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="lab-item">
                            <div class="lab-inner">
                                <div class="lab-content">
                                    <div class="header-title text-start m-0">
                                        <h2 class="mb-0">
                                            {!! setting_get("$k.judul") !!} s
                                        </h2>
                                    </div>
                                    <h5 class="my-4">
                                        {!! setting_get("$k.sub_judul") !!}
                                    </h5>
                                    <p>
                                        {!! setting_get("$k.deskripsi") !!}
                                    </p>
                                    <a href="{!! str_parse(setting_get("$k.tombol_link")) !!}" class="lab-btn mt-4">
                                        {!! setting_get("$k.tombol_title") !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <div class="img-grp">
                                        <div class="about-circle-wrapper">
                                            <div class="about-circle-2"></div>
                                            <div class="about-circle"></div>
                                        </div>
                                        <div class="about-fg-img">
                                            <img class="lazy" alt="hero-image" data-src="{!! asset(setting_get("$k.foto")) !!}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end here -->
    @endif

    @php $k = "$p.program_pembelajaran"; @endphp
    @if (setting_get("$k.visible"))
        <!-- Feature Section Start Here -->
        <section class="feature-section bg-ash padding-tb">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($program_pembelajarans as $program)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="lab-item feature-item text-xs-center">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img class="lazy" alt="{{ $program->nama }}" data-src="{{ $program->fotoUrl() }}">
                                    </div>
                                    <div class="lab-content">
                                        <h5>{{ $program->nama }}</h5>
                                        <p>{{ $program->keterangan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Feature Section End Here -->
    @endif

    @php $k = "$p.pengurus"; @endphp
    @if (setting_get("$k.visible"))
        <!-- Team section start here -->
        <div class="team-section padding-tb shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-title">
                            <h5>{!! setting_get("$k.title") !!}</h5>
                            <h2>{!! setting_get("$k.sub_title") !!}</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            @foreach ($penguruses as $pengurus)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img data-src="{{ $pengurus->fotoUrl() }}" class="card-img-top lazy"
                                                    alt="{{ $pengurus->nama }}"
                                                    style="margin: auto;
                                                    position: relative;
                                                    margin: auto;
                                                    width: 140px;
                                                    height: 140px;
                                                    max-height: 140px;
                                                    border-radius: 140px;
                                                    object-fit: cover;
                                                    object-position: center;
                                                    -webkit-border-radius: 140px;
                                                    -moz-border-radius: 140px;">
                                            </div>
                                            <div class="lab-content">
                                                <h6 class="card-title mb-0">{{ $pengurus->nama }}</h6>
                                                <p class="card-text mb-3">{{ $pengurus->sebagai }}</p>
                                                @if (
                                                    $pengurus->no_telepon ||
                                                        $pengurus->no_whatsapp ||
                                                        $pengurus->facebook ||
                                                        $pengurus->instagram ||
                                                        $pengurus->twitter)
                                                    <div class="social-share">
                                                        @if ($pengurus->no_telepon)
                                                            <a href="tel:{{ $pengurus->no_telepon }}" target="_blank"
                                                                class="m-1 twitter">
                                                                <i class="fas fa-phone me-1"></i>
                                                            </a>
                                                        @endif
                                                        @if ($pengurus->no_whatsapp)
                                                            <a href="https://api.whatsapp.com/send?phone={{ $pengurus->no_whatsapp }}"
                                                                target="_blank" class="m-1 twitter">
                                                                <i class="fab fa-whatsapp"></i>
                                                            </a>
                                                        @endif
                                                        @if ($pengurus->facebook)
                                                            <a href="{{ $pengurus->facebook }}" target="_blank"
                                                                class="m-1 twitter">
                                                                <i class="fab fa-facebook-square"></i>
                                                            </a>
                                                        @endif
                                                        @if ($pengurus->instagram)
                                                            <a href="{{ $pengurus->instagram }}" target="_blank"
                                                                class="m-1 twitter">
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        @endif
                                                        @if ($pengurus->twitter)
                                                            <a href="{{ $pengurus->twitter }}" target="_blank"
                                                                class="m-1 twitter">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endif
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
        <!-- Team section end here -->
    @endif

    @php $k = "$p.galeri"; @endphp
    @if (setting_get("$k.visible"))
        <!-- Galeri Section start here -->
        <section class="event-section padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-title">
                            <h5>{!! setting_get("$k.title") !!}</h5>
                            <h2>{!! setting_get("$k.sub_title") !!}</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="event-content">
                            @if (isset($galeries[0]))
                                @php $galeri = $galeries[0]; @endphp
                                <div class="event-top tri-shape-2 pattern-2">
                                    <div class="event-top-thumb">
                                        <img class="lazy"
                                            data-src="{{ "https://drive.google.com/uc?export=view&id={$galeri->foto_id_gdrive}" }}"
                                            alt="{{ $galeri->nama }}">
                                    </div>
                                    <div class="event-top-content">
                                        <div class="event-top-content-wrapper">
                                            <h3>
                                                <a href="{{ route('galeri.detail', $galeri->slug) }}">
                                                    {{ $galeri->nama }}
                                                </a>
                                            </h3>
                                            <div class="date-count-wrapper">
                                                <ul class="lab-ul event-date">
                                                    <li>
                                                        <i class="icofont-calendar"></i>
                                                        <span>{{ $galeri->dateFormat() }}</span>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-location-pin"></i>
                                                        <span>{{ $galeri->lokasi }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if (isset($galeries[1]))
                                <div class="event-bottom">
                                    <div class="row justify-content-center">
                                        @foreach ($galeries as $k => $galeri)
                                            @if ($k < 1)
                                                @continue
                                            @endif
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="event-item lab-item">
                                                    <div class="lab-inner">
                                                        <div class="lab-thumb">
                                                            <img class="lazy"
                                                                data-src="{{ "https://drive.google.com/uc?export=view&id={$galeri->foto_id_gdrive}" }}"
                                                                alt="{{ $galeri->nama }}">
                                                        </div>
                                                        <div class="lab-content">
                                                            <h5>
                                                                <a href="{{ route('galeri.detail', $galeri->slug) }}">
                                                                    {{ $galeri->nama }}
                                                                </a>
                                                            </h5>
                                                            <ul class="lab-ul event-date">
                                                                <li>
                                                                    <i class="icofont-calendar"></i>
                                                                    <span>{{ $galeri->dateFormat() }}</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-location-pin"></i>
                                                                    <span>{{ $galeri->lokasi }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Galeri Section end here -->
    @endif

    @php $k = "$p.kata_kata"; @endphp
    @if (setting_get("$k.visible"))
        <!-- Qoute Section start Here -->
        <div class="qoute-section padding-tb" style="background-image: url({{ asset(setting_get("$k.image")) }})">
            <div class="qoute-section-wrapper">
                <div class="qoute-overlay"></div>
                <div class="container">
                    <div class="qoute-container">
                        <div class="swiper-wrapper">
                            @foreach ($kata_katas as $kata)
                                <div class="swiper-slide">
                                    <div class="lab-item qoute-item">
                                        <div class="lab-inner d-flex align-items-center">
                                            <div class="lab-thumb">
                                                <span>{{ $kata->sebagai }}</span>
                                                <i class="icofont-quote-left"></i>
                                            </div>
                                            <div class="lab-content">
                                                <blockquote class="blockquote">
                                                    <p> {!! $kata->kata_kata !!} </p>
                                                    <footer class="blockquote-footer bg-transparent">
                                                        {{ $kata->nama }}
                                                    </footer>
                                                </blockquote>
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
        <!-- Qoute Section end Here -->
    @endif

    @php $k = "setting.contact.faq"; @endphp
    @if (setting_get("$k.visible"))
        <!-- FAQ section start here -->
        <section class="service-section padding-tb padding-b shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-title">
                            <h5>{{ setting_get("$k.title") }}</h5>
                            <h2>{{ setting_get("$k.sub_title") }}</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="accordion" id="accordionFaq">
                            @foreach ($faqs as $k => $v)
                                <div class="accordion-item faq__item">
                                    <h2 class="accordion-header title" id="heading{{ $k }}">
                                        @if ($v->type == 2)
                                            <a href="{{ $v->link }}" style="width: 100%">
                                        @endif
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $k }}"
                                            aria-expanded="true" aria-controls="collapse{{ $k }}">
                                            {{ $v->nama }}
                                        </button>
                                        @if ($v->type == 2)
                                            </a>
                                        @endif
                                    </h2>
                                    <div id="collapse{{ $k }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $k }}" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body content">
                                            <p>{{ $v->jawaban }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ section end here -->
    @endif

    @php $k = "$p.artikel"; @endphp
    @if (setting_get("$k.visible"))
        <!-- Artikel section start here -->
        <section class="service-section padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-title">
                            <h5>{{ setting_get("$k.title") }}</h5>
                            <h2>{{ setting_get("$k.sub_title") }}</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-0 justify-content-center service-wrapper">

                            @foreach ($articles as $artikel)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="lab-item service-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img class="lazy" data-src="{{ $artikel->fotoUrl() }}"
                                                    alt="{{ $artikel->nama }}"
                                                    style="width: 100%; height: 300px; object-fit: cover;">
                                            </div>
                                            <div class="lab-content pattern-2">
                                                <div class="lab-content-wrapper">
                                                    <div class="content-top">
                                                        <div class="service-top-content">
                                                            @if (isset($artikel->categories[0]))
                                                                <a
                                                                    href="{{ route('artikel', ['kategori' => $artikel->categories[0]->slug]) }}">
                                                                    <span>{{ $artikel->categories[0]->nama }}</span>
                                                                </a>
                                                            @endif
                                                            <h5>
                                                                <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                                    {{ $artikel->nama }}
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <p>{{ text_cutter($artikel->excerpt) }}</p>
                                                        <a href="{{ route('artikel.detail', $artikel->slug) }}"
                                                            class="text-btn">
                                                            Baca selengkapnya +
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Artikel section end here -->
    @endif
@endsection
