<!-- Header Section Starts Here -->
<header class="header-3 pattern-1">
    @if ($notifikasi)
        @foreach ($notifikasi as $v)
            <div class="alert alert-success" role="alert">
                <div class="container d-flex justify-content-between">
                    <p class="text-dark">
                        {{ $v->deskripsi }}
                        @if ($v->link)
                            <a href="{{ $v->link }}" class="fw-bold">{{ $v->link_nama }}</a>
                        @endif
                    </p>
                    <span class="text-white fw-bold" style="cursor: pointer" onclick="$(this).parent().parent().fadeOut()">
                        x
                    </span>
                </div>
            </div>
        @endforeach
    @endif
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-3 col-12">
                <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo">
                        <a href="{{ url('') }}">
                            <img class="lazy" alt="logo" style="max-height: 65px"
                                data-src="{{ asset(setting_get(set_front('app.foto_dark_landscape_mode'))) }}">
                        </a>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-12">
                <div class="header-top">
                    <div class="header-top-area">
                        <ul class="left lab-ul">
                            <li>
                                <a href="tel:{{ setting_get(set_front('app.no_telepon')) }}">
                                    <i class="icofont-ui-call"></i> <span>
                                        {{ setting_get(set_front('app.no_telepon')) }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> {{ setting_get(set_front('app.address')) }}
                            </li>
                        </ul>
                        <ul class="social-icons lab-ul d-flex">
                            @foreach ($getSosmed_val as $sosmed)
                                <li>
                                    <a href="{{ $sosmed['url'] }}" target="_blank">
                                        <i class="{{ $sosmed['icon'] }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-wrapper">
                        <div class="menu-area justify-content-between w-100">
                            <ul class="menu lab-ul">
                                {!! navbar_menu_front($page_attr->navigation) !!}
                            </ul>
                            <div class="prayer-time d-none d-lg-block">
                                <a href="https://api.whatsapp.com/send?phone={{ setting_get(set_front('app.no_whatsapp')) }}"
                                    target="_blank" class="prayer-time-btn">
                                    <i class="fab fa-whatsapp me-1"></i>
                                    +{{ setting_get(set_front('app.no_whatsapp')) }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section Ends Here-->
