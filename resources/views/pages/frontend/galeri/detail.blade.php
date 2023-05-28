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
                    <li>
                        <a href="{{ route('galeri') }}">Galeri</a>
                    </li>
                    <li><a class="active">Detail</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Events Section start here -->
    <section class="event-section padding-tb padding-b shape-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h2>{{ $model->nama }}</h2>
                    </div>
                </div>
                <div class="col-12">
                    <iframe id="myframe"
                        src="https://drive.google.com/embeddedfolderview?id={{ $model->id_gdrive }}#grid"></iframe>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <ul class="d-flex">

                <li class="list-inline-item list-style-none me-4">
                    <a href="https://www.facebook.com/sharer.php?u={{ route('artikel', $model->slug) }}"
                        title="Share To Facebook" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>

                <li class="list-inline-item list-style-none me-4">
                    <a href="https://api.whatsapp.com/send?text={{ route('artikel', $model->slug) }} {{ $model->nama }}"
                        title="Share To Whatsapp" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>

                <li class="list-inline-item list-style-none me-4">
                    <a href="https://twitter.com/share?url={{ route('artikel', $model->slug) }}&text={{ $model->nama }}"
                        title="Share To Twitter" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>

                <li class="list-inline-item list-style-none me-4">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('artikel', $model->slug) }}&title={{ $model->nama }}&summary={{ $model->keterangan }}"
                        title="Share To Linkedin" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>

                <li class="list-inline-item list-style-none me-4">
                    <a href="https://pinterest.com/pin/create/button/?url={{ route('artikel', $model->slug) }}&media={{ asset($model->foto) }}&description={{ $model->nama }}"
                        title="Share To Pinterest" target="_blank">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </li>

                <li class="list-inline-item list-style-none me-4">
                    <a href="https://telegram.me/share/url?url={{ route('artikel', $model->slug) }}&text={{ $model->nama }}"
                        title="Share To Telegram" target="_blank">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                </li>

                <li class="list-inline-item list-style-none me-4">
                    <a href="mailto:?subject={{ $model->nama }}&body=Check out this site: {{ route('artikel', $model->slug) }}"
                        title="Share by Email" target="_blank">
                        <i class="far fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Events Section end here -->
@endsection

@section('stylesheet')
    <style>
        #myframe {
            height: 100vh;
            width: 100%;
        }
    </style>
@endsection
