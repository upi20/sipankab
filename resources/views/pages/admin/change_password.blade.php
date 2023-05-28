@extends('layouts.admin.master')

@section('content')
    <div class="card">
        <div class="card-body p-4">
            <form id="form_password">
                <h5 class="mb-4">Form Ganti Password</h5>
                <div class="row mb-3">
                    <label for="current_password" class="col-xl-3 col-form-label">Password Lama</label>
                    <div class="col-xl-9">
                        <div class="input-group password-toggle">
                            <span class="input-group-text toggle"><i class='fas fa-eye'></i></span>
                            <input type="password" class="form-control" id="current_password" name="current_password"
                                required="">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="new_password" class="col-xl-3 col-form-label">Password Baru</label>
                    <div class="col-xl-9">
                        <div class="input-group password-toggle">
                            <span class="input-group-text toggle"><i class='fas fa-eye'></i></span>
                            <input type="password" class="form-control" id="new_password" name="new_password"
                                required="">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="repeat_password" class="col-xl-3 col-form-label">Ulangi Password Baru</label>
                    <div class="col-xl-9">
                        <div class="input-group password-toggle">
                            <span class="input-group-text toggle"><i class='fas fa-eye'></i></span>
                            <input type="password" class="form-control" id="repeat_password" name="repeat_password"
                                required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-xl-3 col-form-label"></label>
                    <div class="col-xl-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary" form="form_password">
                                <li class="fas fa-save mr-1"></li> Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('stylesheet')
    <style>
        .password-toggle>.toggle {
            cursor: pointer;
        }
    </style>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
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
