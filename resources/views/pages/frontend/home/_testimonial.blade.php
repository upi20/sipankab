<section class="testimonial-area-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="section-title title-style-two white-title mb-45">
                    <h2 class="title">{!! setting_get("$k.title") !!}</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-nav">
                    <button class="swiper-button-prev"></button>
                    <button class="swiper-button-next"></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container testimonial-active-three">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials ?? [] as $testimoni)
                            <div class="swiper-slide">
                                <div class="testimonial-item-three">
                                    <div class="testimonial-thumb-three">
                                        <img data-src="{{ $testimoni->fotoUrl() }}" class="lazy testimonial-foto"
                                            alt="{{ $testimoni->nama }}">
                                    </div>
                                    <div class="testimonial-content-three">
                                        <h4 class="title">{{ $testimoni->nama }}</h4>
                                        <span>{{ $testimoni->sebagai }}</span>
                                        <p>{!! $testimoni->testimoni !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-swiper-pagination"></div>
    </div>
    <div class="testimonial-shape-wrap">
        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape01.png') }}" class="lazy"
            alt="testimonial_shape01">
        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape02.png') }}" class="lazy"
            alt="testimonial_shape02">
        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape03.png') }}" class="lazy"
            alt="testimonial_shape03">
        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape04.png') }}" class="lazy"
            alt="testimonial_shape04">
    </div>
</section>
