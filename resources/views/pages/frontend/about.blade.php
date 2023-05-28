@extends('layouts.frontend.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-area-two pt-175">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{!! setting_get('about.judul') !!}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {!! setting_get('about.judul') !!}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            {!! setting_get('about.html') !!}
        </div>
    </section>
    <!-- About section end here -->
@endsection
