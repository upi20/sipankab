<!-- Footer Section start here -->
<footer class="footer-section"
    style="background-image: url({{ asset('assets/templates/frontend2/images/bg-images/footer-bg.png);') }}">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">

                @if (setting_get(set_front('app.no_telepon')))
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb w-100 text-center">
                                    <img class="lazy"
                                        data-src="{{ asset('assets/templates/frontend2/images/footer/footer-top/01.png') }}"
                                        alt="Phone-icon">
                                </div>
                                <div class="lab-content w-100 text-center mt-2">
                                    <span>No Telepon :
                                        <a href="tel:{{ setting_get(set_front('app.no_telepon')) }}" target="_blank">
                                            {{ setting_get(set_front('app.no_telepon')) }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (setting_get(set_front('app.no_whatsapp')))
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb w-100 text-center">
                                    <img class="lazy"
                                        data-src="{{ asset('assets/templates/frontend2/images/footer/footer-top/01.png') }}"
                                        alt="whatsapp-icon">
                                </div>
                                <div class="lab-content w-100 text-center mt-2">
                                    <span>Whatsapp :
                                        <a href="https://api.whatsapp.com/send?phone={{ setting_get(set_front('app.no_whatsapp')) }}"
                                            target="_blank">
                                            +{{ setting_get(set_front('app.no_whatsapp')) }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (setting_get(set_front('app.address')))
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb w-100 text-center">
                                    <img class="lazy"
                                        data-src="{{ asset('assets/templates/frontend2/images/footer/footer-top/03.png') }}"
                                        alt="location-icon">
                                </div>
                                <div class="lab-content w-100 text-center mt-2">
                                    <span>Alamat: {{ setting_get(set_front('app.address')) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb tri-shape-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>Tentang Kami</h5>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-4"> {{ setting_get(set_front('meta.description')) }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>Kilasan artikel</h5>
                            </div>
                            <div class="fm-item-content">
                                @foreach ($footerArtikels as $k => $artikel)
                                    @if ($k > 1)
                                        @continue
                                    @endif
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                    <img class="lazy" data-src="{{ $artikel->fotoUrl() }}"
                                                        alt="{{ $artikel->nama }}">
                                                </a>
                                            </div>
                                            <div class="lab-content">
                                                <h6>
                                                    <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                        {{ $artikel->nama }}
                                                    </a>
                                                </h6>
                                                <p>{{ $artikel->dateFormat() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                @if ($footerArtikels->count() > 2)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-content">
                                    @foreach ($footerArtikels as $k => $artikel)
                                        @if ($k < 1)
                                            @continue
                                        @endif
                                        <div class="fm-item-widget lab-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                        <img class="lazy" data-src="{{ $artikel->fotoUrl() }}"
                                                            alt="{{ $artikel->nama }}">
                                                    </a>
                                                </div>
                                                <div class="lab-content">
                                                    <h6>
                                                        <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                            {{ $artikel->nama }}
                                                        </a>
                                                    </h6>
                                                    <p>{{ $artikel->dateFormat() }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center">
                        <p>{!! setting_get(set_front('app.copyright')) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section end here -->
