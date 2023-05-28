<section class="slider-area">
    <div class="slider-active">
        @foreach ($sliders as $slider)
            <div class="single-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-end" data-animation="fadeInRight" data-delay=".8s">
                                <img data-src="{{ $slider->fotoUrl() }}" class="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    {!! $slider->judul !!}
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    {!! $slider->sub_judul !!}
                                </p>
                                <div class="slider-btn">
                                    @if ($slider->tombol_judul !== null)
                                        <a href="{!! str_parse($slider->tombol_judul) !!}" class="btn" data-animation="fadeInLeft"
                                            data-delay=".6s">
                                            {!! $slider->tombol_judul !!} <span></span>
                                        </a>
                                    @endif
                                    @if ($slider->tombol_video_judul !== null)
                                        <a href="{!! $slider->tombol_video_link !!}" class="popup-video"
                                            data-animation="fadeInRight" data-delay=".6s">
                                            {!! $slider->tombol_video_judul !!} <i class="fas fa-play pulse"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="slider-shape-wrap">
        <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape01.png') }}" class="lazy"
            alt="icon">
        <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape02.png') }}" class="lazy"
            alt="icon">
        <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape03.png') }}" class="lazy"
            alt="icon">
        <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape04.png') }}" class="lazy"
            alt="icon">
        <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape05.png') }}" class="lazy"
            alt="icon">
        <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape06.png') }}" class="lazy"
            alt="icon">
    </div>
</section>
