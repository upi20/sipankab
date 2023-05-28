<section class="project-area-three">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-10">
                <div class="section-title title-style-two mb-90">
                    <span class="sub-title">{!! setting_get("$k.title") !!}</span>
                    <h2 class="title">{!! setting_get("$k.sub_title") !!}</h2>
                </div>
            </div>
        </div>
        <div class="project-nav-wrap">
            <div class="row">
                <div class="col-xl-2">
                    <div class="project-tab-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach ($portofolios as $kategori)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                        id="{{ $kategori->slug }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ $kategori->slug }}-container" type="button" role="tab"
                                        aria-controls="{{ $kategori->slug }}-container"
                                        aria-selected="false">{{ $kategori->nama }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-10">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($portofolios as $kategori)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="{{ $kategori->slug }}-container" role="tabpanel"
                                aria-labelledby="{{ $kategori->slug }}-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        @foreach ($kategori->portofolios as $portofolio)
                                            <div class="swiper-slide">
                                                <div class="project-item-three">
                                                    <div class="project-content-three">
                                                        <h2 class="title">
                                                            <a onclick="portofolioDetail('.btnPortofolio-{{ $portofolio->slug }}','{{ $portofolio->slug }}')"
                                                                href="javascript:void(0)">
                                                                {{ $portofolio->nama }}
                                                            </a>
                                                        </h2>
                                                        <p>{{ text_cutter($portofolio->keterangan, 50) }} </p>
                                                    </div>
                                                    <div class="project-thumb-three">
                                                        <a onclick="portofolioDetail('.btnPortofolio-{{ $portofolio->slug }}','{{ $portofolio->slug }}')"
                                                            href="javascript:void(0)">
                                                            <img data-src="{{ $portofolio->fotoUrl() }}"
                                                                style="height: 280px; width:100%; object-fit: cover;"
                                                                class="lazy" alt="{{ $portofolio->nama }}">
                                                        </a>
                                                    </div>
                                                    <div class="project-details-btn">
                                                        <a href="javascript:void(0)"
                                                            class="btnPortofolio-{{ $portofolio->slug }}"
                                                            onclick="portofolioDetail('.btnPortofolio-{{ $portofolio->slug }}','{{ $portofolio->slug }}')">
                                                            Lihat Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="project-shape-wrap-two">
        <img data-src="{{ asset('assets/templates/frontend/img/images/h3_project_shape.png') }}" class="lazy"
            alt="shape">
    </div>
</section>
