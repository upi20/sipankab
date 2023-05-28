@extends('layouts.frontend.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-area-four pt-175 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{ $routeTitle }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $routeTitle }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap-three">
            <img data-src="{{ asset('assets/templates/frontend/img/images/breadcrumb_shape04.png') }}"
                alt="breadcrumb_shape04" class="wow zoomIn lazy" data-wow-delay=".2s">
            <img data-src="{{ asset('assets/templates/frontend/img/images/breadcrumb_shape05.png') }}"
                alt="breadcrumb_shape05" class="wow zoomIn lazy" data-wow-delay=".2s">
            <img data-src="{{ asset('assets/templates/frontend/img/images/breadcrumb_shape06.png') }}"
                alt="breadcrumb_shape06" class="wow zoomIn lazy" data-wow-delay=".2s">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->


    <!-- contact-area -->
    <section class="inner-contact-area">
        <div class="container">
            <div class="inner-contact-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title title-style-two mb-50">
                            <h2 class="title">{!! setting_get('setting.contact.message.title') !!}</h2>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="inner-contact-form-wrap">
                            <form action="#" method="POST" id="message_form" class="comment-form">
                                <div class="form-grp">
                                    <label for="nama"><i class="fas fa-user"></i></label>
                                    <input type="text" name="nama" id="nama"
                                        placeholder="{{ setting_get('setting.contact.message.name_placeholder') }}"
                                        required>
                                </div>
                                <div class="form-grp">
                                    <label for="email"><i class="fas fa-envelope"></i></label>
                                    <input type="email" id="email" name="email"
                                        placeholder="{{ setting_get('setting.contact.message.email_placeholder') }}"
                                        required>
                                </div>
                                <div class="form-grp">
                                    <label for="message"><i class="far fa-comment-alt"></i></label>
                                    <textarea name="message" id="message" placeholder="{{ setting_get('setting.contact.message.message_placeholder') }}"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn">
                                    {{ setting_get('setting.contact.message.button_text') }}<span></span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2">
                        <div class="inner-contact-info">
                            <ul class="list-wrap">
                                @foreach ($contacts as $v)
                                    <li>
                                        <div class="contact-info-item">
                                            <div class="icon">
                                                <i class="{{ $v->icon }}" style="font-size: 2.5em"></i>
                                            </div>
                                            <div class="content">
                                                <h6 class="title">{{ $v->nama }}</h6>
                                                <p> <a href="{!! $v->url !!}">{!! $v->keterangan !!}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection

@section('stylesheet')
    <style>
        .inner-contact-form-wrap {
            width: 100%;
            position: unset;
            margin-bottom: 40px;
        }
    </style>
@endsection

@section('javascript')
    {{-- sweetalert --}}
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    {{-- Main script --}}
    <script src="{{ resource_loader('pages/frontend/kontak.js') }}"></script>
@endsection
