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
                    <h2 class="page-title">{{ setting_get('setting.contact.faq.title') }}</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="{{ route('home') }}"><span>Home</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>{{ setting_get('setting.contact.faq.title') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- faq area start -->
    @if ($faqs->count())
        <div class="faq__area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq__wrapper">

                            <div class="accordion" id="accordionFaq">
                                @foreach ($faqs as $k => $v)
                                    <div class="accordion-item faq__item">
                                        <h2 class="accordion-header title" id="heading{{ $k }}">
                                            @if ($v->type == 2)
                                                <a href="{{ $v->link }}">
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
            </div>
        </div>
    @endif
    <!-- faq area end -->
@endsection
