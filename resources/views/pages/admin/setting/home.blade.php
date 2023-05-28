@extends('layouts.admin.master')

@section('content')
    <div class="grid">
        <div class="grid-sizer col-md-6 col-lg-4"></div>

        {{-- hero --}}
        <div class="grid-item col-md-6 col-lg-4 p-2">
            @php
                $name = 'hero';
                $title = 'Bagian Utama';
            @endphp
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-md-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mt-2 text-uppercase">{{ $title }}</h6>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="visible" form="{{ $name }}-form" type="checkbox"
                                id="{{ $name }}-settingTampilkan"
                                {{ setting_get($s("$name.visible")) ? 'checked' : '' }}>
                            <label class="form-check-label" for="{{ $name }}-settingTampilkan">
                                Tampilkan
                            </label>
                        </div>
                    </div>
                    <hr class="mt-1" />

                    <form class="form-horizontal" id="{{ $name }}-form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.judul") }}">Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.judul") }}" name="judul" class="form-control"
                                placeholder="Judul" value="{{ setting_get($s("$name.judul")) }}" required />
                        </div>
                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.sub_judul") }}">Sub Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.sub_judul") }}" name="sub_judul" class="form-control"
                                placeholder="Sub Judul" value="{{ setting_get($s("$name.sub_judul")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.deskripsi") }}">Deskripsi
                                <span class="text-danger">*</span></label>
                            <textarea type="text" id="{{ $s("$name.deskripsi") }}" name="deskripsi" class="form-control" placeholder="Sub Judul"
                                required rows="3">{!! setting_get($s("$name.deskripsi")) !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.tombol_title") }}">Tombol Teks
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.tombol_title") }}" name="tombol_title"
                                class="form-control" placeholder="Teks Tombol"
                                value="{{ setting_get($s("$name.tombol_title")) }}" required />
                        </div>
                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.tombol_link") }}">Tombol Link
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.tombol_link") }}" name="tombol_link"
                                class="form-control" placeholder="Tombol Link"
                                value="{{ setting_get($s("$name.tombol_link")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label mb-1">Foto
                                <span class="badge bg-primary" id="foto"
                                    onclick='viewImage(`{{ setting_get($s("$name.foto")) }}`, `{{ $title }} Image View`)'>
                                    Lihat
                                </span>
                            </label>
                            <input type="file" accept="image/*" id="{{ "$name.foto" }}" name="foto"
                                class="form-control" />
                        </div>
                    </form>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary" form="{{ $name }}-form">
                            <li class="fas fa-save mr-1"></li> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Galeri --}}
        <div class="grid-item col-md-6 col-lg-4 p-2">
            @php
                $name = 'galeri';
                $title = 'Galeri';
            @endphp
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-md-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mt-2 text-uppercase">{{ $title }}</h6>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="visible" form="{{ $name }}-form" type="checkbox"
                                id="{{ $name }}-settingTampilkan"
                                {{ setting_get($s("$name.visible")) ? 'checked' : '' }}>
                            <label class="form-check-label" for="{{ $name }}-settingTampilkan">
                                Tampilkan
                            </label>
                        </div>
                    </div>
                    <hr class="mt-1" />

                    <form class="form-horizontal" id="{{ $name }}-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.title") }}">Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.title") }}" name="title" class="form-control"
                                placeholder="Judul" value="{{ setting_get($s("$name.title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.sub_title") }}">Sub Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.sub_title") }}" name="sub_title"
                                class="form-control" placeholder="Sub Judul"
                                value="{{ setting_get($s("$name.sub_title")) }}" required />
                        </div>
                    </form>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary" form="{{ $name }}-form">
                            <li class="fas fa-save mr-1"></li> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- artikel --}}
        <div class="grid-item col-md-6 col-lg-4 p-2">
            @php
                $name = 'artikel';
                $title = 'Artikel';
            @endphp
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-md-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mt-2 text-uppercase">{{ $title }}</h6>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="visible" form="{{ $name }}-form"
                                type="checkbox" id="{{ $name }}-settingTampilkan"
                                {{ setting_get($s("$name.visible")) ? 'checked' : '' }}>
                            <label class="form-check-label" for="{{ $name }}-settingTampilkan">
                                Tampilkan
                            </label>
                        </div>
                    </div>
                    <hr class="mt-1" />
                    <form class="form-horizontal" id="{{ $name }}-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.title") }}">Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.title") }}" name="title" class="form-control"
                                placeholder="Judul" value="{{ setting_get($s("$name.title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label mb-1" for="{{ $s("$name.sub_title") }}">Sub Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.sub_title") }}" name="sub_title"
                                class="form-control" placeholder="Sub Judul"
                                value="{{ setting_get($s("$name.sub_title")) }}" required />
                        </div>
                    </form>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary" form="{{ $name }}-form">
                            <li class="fas fa-save mr-1"></li> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="modal-image">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-image-title">View Foto</h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modal-image-element" alt="Icon Pendaftaran">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/select2/js/select2.full.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/mansory.min.js', name: 'sash') }}"></script>
    @php $resource = resource_loader(blade_path: $view); @endphp
    <script src="{{ $resource }}"></script>
@endsection
