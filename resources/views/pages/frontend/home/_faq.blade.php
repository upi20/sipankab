<section class="faq-area pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-img">
                    <img data-src="{{ asset('assets/templates/frontend/img/images/faq_img.png') }}" class="lazy"
                        alt="icon1">
                    <img data-src="{{ asset('assets/templates/frontend/img/images/faq_img02.png') }}" class="lazy"
                        alt="icon2">
                </div>
                <div class="faq-content">
                    <div class="section-title title-style-two mb-20">
                        <h2 class="title">{!! setting_get("$k.title") !!}</h2>
                    </div>
                    <h3 class="title-two">{!! setting_get("$k.sub_title") !!}</h3>
                    <p>{!! setting_get("$k.description") !!}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion faq-wrap" id="accordionExample">
                    @foreach ($faqs as $k => $v)
                        <div class="accordion-item">
                            @if ($v->type == 2)
                                <a href="{{ $v->link }}">
                            @endif
                            <h2 class="accordion-header" id="faqItemHead{{ $v->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqItem{{ $v->id }}"
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                    aria-controls="faqItem{{ $v->id }}">
                                    {{ $v->nama }}
                                </button>
                            </h2>
                            <div id="faqItem{{ $v->id }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="faqItemHead{{ $v->id }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>{!! $v->jawaban !!}</p>
                                </div>
                            </div>
                            @if ($v->type == 2)
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="faq-shape-wrap">
        <img data-src="{{ asset('assets/templates/frontend/img/images/faq_shape.png') }}" class="lazy"
            alt="icon">
    </div>
</section>


{{-- @foreach ($faqs as $k => $v)
<div class="accordion-item">
    @if ($v->type == 2)
        <a href="{{ $v->link }}">
    @endif
    <h2 class="accordion-header" id="faqItem{{ $v->id }}">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#faqItem{{ $v->id }}"
            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
            aria-controls="faqItem{{ $v->id }}">
            {{ $v->nama }}
        </button>
    </h2>
    <div id="faqItem{{ $v->id }}"
        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
        aria-labelledby="faqItem{{ $v->id }}" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>{!! $v->jawaban !!}</p>
        </div>
    </div>
    @if ($v->type == 2)
        </a>
    @endif
</div>
@endforeach --}}
