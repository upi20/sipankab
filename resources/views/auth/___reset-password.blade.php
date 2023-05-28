@extends('layouts.frontend.master')
@section('content')
    <div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Ganti Password</h3>

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
                    action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="form-group d-none">
                        <input type="email" placeholder="Email" name="email"id="email"
                            value="{{ old('email', $request->email) }}">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password"id="password">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Konfirmasi Password"
                            name="password_confirmation"id="password_confirmation">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Ganti Password</span></button>
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
