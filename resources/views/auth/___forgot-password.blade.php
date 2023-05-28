@extends('layouts.frontend.master')
@section('content')
    <div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Lupa Password</h3>

                <p class="text-muted mt-3">Masukan email yang sudah terdaftar</p>
                @if (session('status'))
                    <p class="text-success">
                        {{ session('status') }}
                    </p>
                @endif

                @if ($errors->any())
                    <div class="mt-1">
                        <div class="fw-bold text-danger">{{ __('Whoops! Something went wrong.') }}</div>
                        <ul class="text-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="account-form" id="Loginform" name="Loginform" method="POST"
                    action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email"id="email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Kirim Email</span></button>
                    </div>
                    <div class="form-group">
                        <div class="d-flex flex-row-reverse">
                            <p>
                                Kembali ke halaman sebelumnya:
                                <a href="{{ url('login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
