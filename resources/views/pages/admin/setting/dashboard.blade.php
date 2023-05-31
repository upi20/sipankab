@extends('layouts.admin.master')

@section('content')
    <div class="card border-primary">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">form {{ $page_attr['title'] }}</h6>
                </div>
            </div>

            <form method="post" action="" enctype="multipart/form-data" id="MainForm">
                <div class="form-group">
                    <label><strong>Deskripsi :</strong></label>
                    <textarea class="summernote" name="dashboard">{!! setting_get('dashboard.html') !!}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3" id="btn-save" form="MainForm">
                    <li class="fas fa-save mr-1"></li> Simpan
                </button>
            </form>
        </div>
    </div>
@endsection

@section('stylesheet')
    @vite(['resources/css/_summernote.scss']);
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/summernote/summernote1.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    @php $resource = resource_loader(blade_path: $view); @endphp
    <script src="{{ $resource }}"></script>
@endsection
