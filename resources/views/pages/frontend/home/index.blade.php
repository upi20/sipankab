@extends('layouts.frontend.master')
@section('content')
    @php $p = 'setting.home'; @endphp

    @php $k = "$p.slider"; @endphp
    @if (setting_get("$k.visible", true))
        @include('pages.frontend.home._slider', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "$p.services"; @endphp
    @if (setting_get("$k.visible", true))
        @include('pages.frontend.home._services', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "$p.agency"; @endphp
    @if (setting_get("$k.visible", true))
        @include('pages.frontend.home._agency', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "$p.pricing"; @endphp
    @if (setting_get("$k.visible"))
        @include('pages.frontend.home._pricing', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "$p.portfolio"; @endphp
    @if (setting_get("$k.visible"))
        @include('pages.frontend.home._portfolio', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "$p.testimonial"; @endphp
    @if (setting_get("$k.visible"))
        @include('pages.frontend.home._testimonial', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "setting.contact.faq"; @endphp
    @if (setting_get("$k.visible"))
        @include('pages.frontend.home._faq', array_merge($compact, ['k' => $k]));
    @endif

    @php $k = "$p.newsletter"; @endphp
    @if (setting_get("$k.visible", true))
        @include('pages.frontend.home._newsletter', array_merge($compact, ['k' => $k]));
    @endif

    <!-- Modal -->
    <div class="modal fade" id="portfolioModal" aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-body p-lg-5">
                    <button type="button" class="portfolio-section btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="row">
                        <div class="col-xl-12">
                            <img src="" alt="icon" style="border-radius: 12px; width:100%" class="mb-4"
                                id="portfolioModalFoto">
                        </div>
                        <div class="col-xl-6">
                            <div class="content-wrapper">
                                <h2 class="item-title h4" id="portfolioModalNama"></h2>
                                <p id="portfolioModalKeterangan">
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="meta-wrapper">
                                <ul class="item-meta p-0" id="portfolioModalItems"> </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="{{ resource_loader('pages/frontend/home', type: 'css') }}">
@endsection
@section('javascript')
    <script src="{{ resource_loader('pages/frontend/home.js') }}"></script>
@endsection
