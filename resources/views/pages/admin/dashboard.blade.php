@extends('layouts.admin.master')

@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <a href="{{ route('admin.calon') }}">
                <div class="card radius-10 border-start border-0 border-4 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Jumlah Calon</p>
                                <h4 class="my-1 text-info">{{ $total_calon }}</h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
                                <i class='bx bxs-user'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col"> <a href="{{ route('admin.password') }}">
                <div class="card radius-10 border-start border-0 border-4 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Ganti Password</p>
                                <h4 class="my-1 text-warning"><br></h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                                <i class='bx bxs-key'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            {!! setting_get('dashboard.html') !!}
        </div>
    </div>
@endsection
