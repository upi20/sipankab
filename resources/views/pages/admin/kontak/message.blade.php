@extends('layouts.admin.master')

@section('content')
    @php
        $can_setting = auth_can(h_prefix('setting'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">Data {{ $page_attr['title'] }}</h6>
                </div>
            </div>
            <hr class="mt-1 mb-0" />
            @if ($can_setting)
                <div class="accordion accordion-flush" id="setting_list_container">
                    <div class="accordion-item">
                        <h6 class="accordion-header" id="setting_list">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#settingList" aria-expanded="false" aria-controls="settingList">
                                Pengaturan
                            </button>
                        </h6>
                        <div id="settingList" class="accordion-collapse collapse" aria-labelledby="setting_list"
                            data-bs-parent="#setting_list_container">
                            <div class="accordion-body">
                                <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="setting_form">

                                    <div class="form-group float-start me-2">
                                        <label for="setting_title">Judul</label>
                                        <input type="text" class="form-control" id="setting_title" name="title"
                                            value="{{ $setting->title }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_sub_title">Sub Judul</label>
                                        <input type="text" class="form-control" id="setting_sub_title" name="sub_title"
                                            value="{{ $setting->sub_title }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_name">Teks Nama</label>
                                        <input type="text" class="form-control" id="setting_name" name="name"
                                            value="{{ $setting->name }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_name_placeholder">Teks Nama Keterangan</label>
                                        <input type="text" class="form-control" id="setting_name_placeholder"
                                            name="name_placeholder" value="{{ $setting->name_placeholder }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_email">Teks Email</label>
                                        <input type="text" class="form-control" id="setting_email" name="email"
                                            value="{{ $setting->email }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_email_placeholder">Teks Email Keterangan</label>
                                        <input type="text" class="form-control" id="setting_email_placeholder"
                                            name="email_placeholder" value="{{ $setting->email_placeholder }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_message">Teks Pesan</label>
                                        <input type="text" class="form-control" id="setting_message" name="message"
                                            value="{{ $setting->message }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_message_placeholder">Teks Pesan Keterangan</label>
                                        <input type="text" class="form-control" id="setting_message_placeholder"
                                            name="message_placeholder" value="{{ $setting->message_placeholder }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_button_text">Teks Tombol</label>
                                        <input type="text" class="form-control" id="setting_button_text"
                                            name="button_text" value="{{ $setting->button_text }}">
                                    </div>

                                </form>
                                <div style="clear: both"></div>
                                <button type="submit" form="setting_form" class="btn btn-rounded btn-sm btn-secondary mt-2"
                                    data-toggle="tooltip" title="Simpan">
                                    <li class="fas fa-save mr-1"></li> Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <table class="table table-striped table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dari</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        {!! $can_delete ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'page_title' => $page_attr['title'],
                'can_delete' => $can_delete ? 'true' : 'false',
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
