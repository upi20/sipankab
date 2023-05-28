<?php

// ====================================================================================================================
use App\Http\Controllers\Admin\Pendaftaran\GFormController;
use App\Http\Controllers\Frontend\AboutController;

// ====================================================================================================================
// utility ============================================================================================================
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// Controller =========================================================================================================
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LoaderController;

// ====================================================================================================================
// Frontend ===========================================================================================================
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\GaleriController;
use App\Http\Controllers\Frontend\ArtikelController;
use App\Http\Controllers\Frontend\KatalogController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\MarketplaceController;
use App\Http\Controllers\Frontend\PendaftaranController;
use App\Http\Controllers\Frontend\ProdukController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SocialiteController;

// ====================================================================================================================
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




Route::get('/', function () {
    return Redirect::route('admin.dashboard');
})->name("home");

// home default =======================================================================================================
Route::controller(HomeController::class)->group(function () {
});

// artikel ============================================================================================================
$prefix = 'artikel';
Route::controller(ArtikelController::class)->prefix($prefix)->group(function () use ($prefix) {
    Route::get('/', 'index')->name($prefix);
    Route::get('/{model:slug}', 'detail')->name("$prefix.detail");
});
// ====================================================================================================================

// katalog ============================================================================================================
$prefix = 'katalog';
Route::controller(KatalogController::class)->prefix($prefix)->group(function () use ($prefix) {
    Route::get('/', 'index')->name($prefix);
    Route::get('/{model:slug}', 'detail')->name("$prefix.detail");
});
// ====================================================================================================================

// produk =============================================================================================================
$prefix = 'produk';
Route::controller(ProdukController::class)->prefix($prefix)->group(function () use ($prefix) {
    Route::get('/', 'index')->name($prefix);
    Route::get('/{model:slug}', 'detail')->name("$prefix.detail");
});
// ====================================================================================================================



// Kontak =============================================================================================================
$name = 'kontak';
Route::controller(KontakController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
    Route::post('/send', 'insert')->name("$name.send");
});
// ====================================================================================================================



// Pendaftaran =============================================================================================================
$name = 'pendaftaran';
Route::controller(PendaftaranController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
    Route::post('/send', 'insert')->name("$name.send");
});
// ====================================================================================================================


// Galeri =============================================================================================================
$name = 'galeri';
Route::controller(GaleriController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
    Route::get('/detail/{model:slug}', 'detail')->name("$name.detail");
});
// ====================================================================================================================

// AboutUs ============================================================================================================
$name = 'about';
Route::controller(AboutController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
});
// ====================================================================================================================

// Marketplace ========================================================================================================
$name = 'marketplace';
Route::controller(MarketplaceController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
});
// ====================================================================================================================

// Layanan ===========================================================================================================
$name = 'layanan';
Route::controller(LayananController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/{sub_kategori:slug}', 'index')->name($name);
});
// ====================================================================================================================




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


// laboartorium =======================================================================================================
$prefix = 'lab';
Route::controller(LabController::class)->prefix($prefix)->group(function () {
    Route::get('/phpspreadsheet', 'phpspreadsheet')->name("lab.phpspreadsheet");
    Route::get('/javascript', 'javascript')->name("lab.javascript");
    Route::get('/jstes', 'jstes')->name("lab.jstes");
    Route::get('/count', 'count')->name("lab.count");
});
// ====================================================================================================================


// frontend ===========================================================================================================
Route::get('/frontend', [HomeController::class, 'fronted2'])->name('frontend');

// sitmap =============================================================================================================
Route::get('/sitemap', [SitemapController::class, 'index']);

// Gform
Route::get('/f/{model:slug}', [GFormController::class, 'frontend_detail'])->name("frontend.gform.detail");
