@extends('layouts.frontend._master')
@section('content')
    <div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Login</h3>
                <form class="account-form" id="Loginform">
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email"id="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex flex-row-reverse">
                            <a href="{{ url('forgot-password') }}">Lupa Password</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Login</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ resource_loader('pages/admin/auth/login.js', params: ['redirect' => $redirect]) }}"></script>
@endsection
