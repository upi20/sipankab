@extends('layouts.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert', 1));
        $can_update = auth_can(h_prefix('update', 1));
        $can_delete = auth_can(h_prefix('delete', 1));
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">Data {{ $page_attr['title'] }} | {{ $kategori->nama }}</h6>
                </div>
                <div>
                    <a class="btn btn-rounded btn-secondary btn-sm" href="{{ route(h_prefix('kategori', 2)) }}">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    @if ($can_insert)
                        <button type="button" class="btn btn-rounded btn-primary btn-sm" data-bs-effect="effect-scale"
                            data-bs-toggle="modal" href="#modal-default" onclick="addFunc()" data-target="#modal-default">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    @endif
                </div>
            </div>
            <hr class="mt-1" />
            <table class="table table-striped table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>Urutan</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Dipakai</th>
                        {!! $can_delete || $can_update ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST"
                        enctype="multipart/form-data" class="row g-3">
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="kategori_id" id="kategori_id" value="{{ $kategori->id }}">
                        <div class="col-md-6">
                            <label class="form-label mb-1" for="urutan">Urutan</label>
                            <input type="number" class="form-control" id="urutan" name="urutan" placeholder="Urutan" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-1" for="nama">Nama<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                required="" />
                        </div>
                        <div class="col-12">
                            <hr class="mb-1 mt-2">
                            <h6 class="mt-0 mb-1">Data halaman</h6>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-1" for="judul">Judul</label>
                            <textarea type="text" class="form-control" id="judul" name="judul"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-1" for="sub_judul">Sub Judul</label>
                            <textarea type="text" class="form-control" id="sub_judul" name="sub_judul"></textarea>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="flex">
                                    <label class="form-label mb-1" for="foto">Foto </label>
                                    <span class="badge bg-success" id="lihat-foto">Lihat</span>
                                </div>
                                <input type="file" class="form-control" id="foto" name="foto" required />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label mb-1" for="tampilkan_client">Tampilkan Klien</label>
                                <select class="form-control" required="" id="tampilkan_client" name="tampilkan_client">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label mb-1" for="tampilkan_testimoni">Tampilkan Testimoni</label>
                                <select class="form-control" required="" id="tampilkan_testimoni"
                                    name="tampilkan_testimoni">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label mb-1" for="keterangan">Keterangan</label>
                            <textarea type="text" class="summernote" id="keterangan" name="keterangan"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Tutup
                    </button>
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

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
    @vite(['resources/css/_summernote.scss']);
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/summernote/summernote1.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
                'page_title' => $page_attr['title'],
                'image_folder' => $image_folder,
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
