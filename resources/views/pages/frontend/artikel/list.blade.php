@extends('layouts.frontend.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-area-three parallax pt-175 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{ $page_attr['title'] }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page_attr['title'] }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb-search">
                        @php
                            $rQuery = unsetByKey($request->query(), ['search', 'page']);
                        @endphp
                        <form action="{{ route('artikel', $rQuery) }}" method="GET">
                            @foreach ($rQuery ?? [] as $name => $value)
                                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                            @endforeach
                            <label for="serch"><i class="far fa-search"></i></label>

                            <input type="text" id="serch" name="search" placeholder="Masukan Kata Kunci"
                                value="{{ request()->search }}">

                            <button type="submit" class="btn">Cari <span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap-two">
            <div class="parallax-shape">
                <img src="{{ asset('assets/templates/frontend/img/images/breadcrumb_shape03.png') }}" class="layer lazy"
                    data-depth="0.5" alt="img">
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="inner-blog-area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-70">
                    @foreach ($articles as $a)
                        <div class="inner-blog-item">
                            <div class="inner-blog-thumb">
                                <a href="{{ route('artikel.detail', $a->slug) }}">
                                    <img data-src="{{ $a->fotoUrl() }}" alt="{{ $a->nama }}" class="lazy"
                                        style="width: 100%">
                                </a>
                            </div>
                            <div class="inner-blog-content">
                                <div class="blog-meta-two">
                                    <ul class="list-wrap">
                                        @if (isset($a->categories[0]))
                                            <li class="tag">
                                                <a href="{{ url("artikel?kategori={$a->categories[0]->slug}") }}">
                                                    {{ $a->categories[0]->nama }}
                                                </a>
                                            </li>
                                        @endif

                                        <li><i class="fal fa-calendar"></i>{{ $a->dateFormat('d F Y') }}</li>
                                        @if ($a->user)
                                            <li>Oleh <a href="javascript:void(0)">{{ $a->user->name }}</a></li>
                                        @endif
                                    </ul>
                                </div>
                                <h2 class="title">
                                    <a href="{{ route('artikel.detail', $a->slug) }}">
                                        {{ $a->nama }}
                                    </a>
                                </h2>
                                <p>{{ $a->excerpt }}</p>
                                <a href="{{ route('artikel.detail', $a->slug) }}" class="rade-more-btn">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="pagination-wrap">
                        {!! $articles->links() !!}
                    </div>
                </div>
                <div class="col-30">
                    <aside class="blog-sidebar">
                        {{-- kategori --}}
                        @if ($categories->count())
                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5></h5>
                                </div>
                                <ul class="lab-ul widget-wrapper list-bg-none">


                                </ul>
                            </div>

                            <div class="widget">
                                <h2 class="widget-title">Kategori</h2>
                                <div class="blog-cat-list">
                                    <ul class="list-wrap">
                                        @foreach ($categories as $kategori)
                                            @php
                                                $is_active = $kategori_selected ? $kategori_selected->slug == $kategori->slug : false;
                                                $rQuery = unsetByKey($request->query(), ['kategori']);
                                            @endphp
                                            <li class="{{ $is_active ? 'bg-primary ps-2 pe-2 text-white' : '' }}"
                                                {!! $is_active ? 'style="border-radius: 8px;"' : '' !!}>
                                                <a class="{{ $is_active ? 'text-white' : '' }}"
                                                    href="{{ route('artikel', $is_active ? $rQuery : array_merge($rQuery, ['kategori' => $kategori->slug])) }}">
                                                    {{ $kategori->nama }}
                                                    <span class="{{ $is_active ? 'text-white' : '' }}">
                                                        ({{ $kategori->artikel }})
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if ($tags->count())
                            <div class="widget widget-tags">
                                <div class="widget-header">
                                    <h5></h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">

                                </ul>
                            </div>

                            <div class="widget">
                                <h2 class="widget-title">Tags Artikel</h2>
                                <div class="tag-list">
                                    <ul class="list-wrap">
                                        @foreach ($tags as $tag)
                                            @php
                                                $is_active = $tag_selected ? $tag_selected->slug == $tag->slug : false;
                                                $rQuery = unsetByKey($request->query(), ['tag']);
                                            @endphp

                                            <li>
                                                <a {!! $is_active ? 'class="text-white bg-primary"' : '' !!}
                                                    href="{{ route('artikel', $is_active ? $rQuery : array_merge($rQuery, ['tag' => $tag->slug])) }}">
                                                    {{ $tag->nama }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if ($banner !== null)
                            <div class="widget">
                                <div class="popular-post-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="popular-post-item big-post mb-40">
                                                <div class="thumb">
                                                    <a href="javascript:void(0)">
                                                        <img class="lazy" data-src="{{ $banner->fotoUrl() }}"
                                                            alt="{{ $banner->nama }}" style="width: 100%">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
