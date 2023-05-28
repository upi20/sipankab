<footer>
    <div class="footer-area-two footer-area-three">
        <div class="container">
            <div class="footer-top-two">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="footer-content-two text-center">
                            <div class="logo">
                                <a href="{{ url('') }}">
                                    <img data-src="{{ asset('assets/templates/frontend/logo/LOGO CEMPOR DIGITAL-02.png') }}"
                                        class="lazy" alt="Logo">
                                </a>
                            </div>
                            <p>Sudah saatnya kita berkolaborasi dalam hal karya yang melebihi ekspektasi para pelaku
                                teknologi digital kreatif</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-two">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p>{!! setting_get(set_front('app.copyright')) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social-two">
                            <ul class="list-wrap">
                                <li class="title">Ikuti Kami</li>
                                @foreach ($getSosmed_val as $sosmed)
                                    <li>
                                        <a style="color: black;
                                        margin: 0 12px 0 0px;
                                        font-size: 1.8em;"
                                            href="{{ $sosmed['url'] }}" target="_blank">
                                            <i class="{{ $sosmed['icon'] }}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
