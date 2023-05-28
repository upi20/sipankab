@extends('layouts.admin.master')

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">{{ $page_attr['title'] }}</h6>
                </div>

                <div>
                    <a type="button" class="btn btn-rounded btn-success btn-sm"
                        href="{{ route(h_prefix(null, $route_min)) }}">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <hr class="mt-1" />
            <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label mb-1" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Name" required="" value="{{ $model->name }}" />
                            <input type="hidden" id="id" name="id" value="{{ $model->id }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label mb-1" for="guard_name">Guard <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="guard_name" name="guard_name"
                                placeholder="Enter Guard" required="" value="{{ $model->guard_name }}" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label mb-1" for="guard_name">Permission <span class="text-danger">*</span></label>
                    <select name="permissions[]" id="permissions" multiple class="form-control">
                        @foreach ($permissions as $k => $p)
                            @php
                                $current = $p->name;
                                $next = isset($permissions[$k + 1]) ? $permissions[$k + 1]->name : '';
                                $color = count(explode('.', $current)) == count(explode('.', $next)) - 1 && str_contains($next, $current);
                            @endphp
                            <option value="{{ $p->name }}" {{ in_array($p->name, $roles) ? 'selected' : '' }}>
                                {{ $p->name }} {{ $p->page || $color ? ' | Page' : '' }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="text-end">
                <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                    <li class="fas fa-save mr-1"></li> Simpan
                </button>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script
        src="{{ asset_admin('plugins/bootstrap4-duallistbox/4.0.1/jquery.bootstrap-duallistbox.min.js', name: 'sash') }}">
    </script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'reload' => $reload,
                'route_min' => $route_min,
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection

@section('stylesheet')
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/bootstrap4-duallistbox/4.0.1/bootstrap-duallistbox.min.css', name: 'sash') }}">
@endsection
