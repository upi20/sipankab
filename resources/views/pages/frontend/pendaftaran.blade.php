@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{ $routeTitle }}</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('') }}">Utama</a></li>
                    <li><a class="active">{{ $routeTitle }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-4">
        <div class="container">
            <h3 class="title">Formulir Pendaftaran</h3>
            <br>
            <form class="account-form" id="mainForm">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin*</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir*</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap*</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" required rows="3"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="no_telepon" class="col-sm-2 col-form-label">No Telepon*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="no_whatsapp" class="col-sm-2 col-form-label">No Whatsapp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp">
                    </div>
                </div>

                <p>Keterangan: *Wajib di Isi</p>

                <div class="form-group">
                    <button class="d-block lab-btn" type="submit"><span>Kirim</span></button>
                </div>
            </form>
        </div>
    </section>
    <!-- About section end here -->
@endsection

@section('stylesheet')
    <style>
        .form-control {
            border-style: solid;
            width: 100%;
            border-width: 1px;
            border-color: #f0f0f0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background: #fff;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.06);
            padding: 10px 15px;
        }
    </style>
@endsection

@section('javascript')
    {{-- sweetalert --}}
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    {{-- Main script --}}
    <script src="{{ resource_loader('pages/frontend/pendaftaran.js') }}"></script>
@endsection
