<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaderController;
use App\Http\Controllers\LoginController;
// ====================================================================================================================

Route::get('/', function () {
    return Redirect::route('admin.dashboard');
})->name("home");

// dashboard ==========================================================================================================
Route::get('/dashboard', function () {
    if (!auth()->user()) return Redirect::route('login');
    if (auth_has_role(config('app.super_admin_role'))) {
        return Redirect::route('admin.dashboard');
    } else {
        return Redirect::route('admin.dashboard');
    }
})->name("dashboard");
// ====================================================================================================================

// Utility ============================================================================================================
$prefix = 'loader';
Route::controller(LoaderController::class)->prefix($prefix)->group(function () {
    Route::prefix('js')->group(function () {
        Route::any('{path}', 'js')->where('path', '.*');
    });
    Route::prefix('css')->group(function () {
        Route::any('{path}', 'css')->where('path', '.*');
    });
});
// ====================================================================================================================

// auth ===============================================================================================================
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name("login");
    Route::post('/login', 'check_login')->name("login.check_login");
    Route::get('/logout', 'logout')->name("login.logout");
});
Route::controller(SocialiteController::class)->group(function () {
    Route::get('/auth/{provider}', 'redirectToProvider');
    Route::get('/auth/{provider}/callback', 'handleProvideCallback');
});
// ====================================================================================================================
