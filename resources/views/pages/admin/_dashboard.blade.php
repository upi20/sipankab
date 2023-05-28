@extends('layouts.admin.master')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Halaman Utama</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.pendaftaran.santri') }}">
                <div class="card bg-warning img-card box-warning-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total_pendaftar }}</h2>
                                <p class="text-white mb-0">Jumlah Pendaftaran </p>
                            </div>
                            <div class="ms-auto"> <i class="fas fa-user-edit text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.artikel.data') }}">
                <div class="card bg-secondary img-card box-secondary-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total_artikel }}</h2>
                                <p class="text-white mb-0">Jumlah Artikel </p>
                            </div>
                            <div class="ms-auto"> <i class="fas fa-file-alt text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.kontak.message') }}">
                <div class="card bg-info img-card box-info-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total_pesan }}</h2>
                                <p class="text-white mb-0">Jumlah Pesan Diterima </p>
                            </div>
                            <div class="ms-auto"> <i class="fas fa-envelope text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.password') }}">
                <div class="card  bg-success img-card box-success-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Ganti Password</h3>
                                <p class="text-white mb-0"><br></p>
                            </div>
                            <div class="ms-auto"> <i class="fas fa-key text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="card mt-3" id="penghitung-container">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <div>
                <h3 class="card-title mb-1">Penghitung Pengunjung</h3>
            </div>
            <div class="d-flex flex-row">
                <div id="datepicker"
                    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="chart-pengunjung" class="chartsh"></div>
            <br>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h3 class="card-title">Platform</h3>
                    <div id="chart-platform" class="chartsh"></div>
                </div>
                <div class="col-lg-6 text-center">
                    <h3 class="card-title">Browser</h3>
                    <div id="chart-browser" class="chartsh"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('stylesheet')
    <style>
        .card-main {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin: 3px;
        }

        .card-main:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
    </style>
    <link rel="stylesheet" href="{{ asset_admin('plugins/daterangepicker/daterangepicker.css') }}">
@endsection

@section('javascript')
    <script src="{{ asset_admin('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset_admin('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/charts-c3/c3-chart.js') }}"></script>
    <script src="{{ asset_admin('plugins/input-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/daterangepicker/daterangepicker.js') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
