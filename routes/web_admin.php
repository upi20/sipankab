<?php
// ====================================================================================================================
// utility ============================================================================================================
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// ====================================================================================================================
// Admin ==============================================================================================================
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\DashboardController;

// Artikel ============================================================================================================
use App\Http\Controllers\Admin\Artikel\ArtikelController;
use App\Http\Controllers\Admin\Artikel\KategoriController;
use App\Http\Controllers\Admin\Artikel\TagController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CalonController;
use App\Http\Controllers\Admin\CalonNilaiController;
use App\Http\Controllers\Admin\ClientController;

// Contact ============================================================================================================
use App\Http\Controllers\Admin\Contact\FAQController;
use App\Http\Controllers\Admin\Contact\ListContactController;
use App\Http\Controllers\Admin\Contact\MessageController;

// User Access ========================================================================================================
use App\Http\Controllers\Admin\UserAccess\PermissionController;
use App\Http\Controllers\Admin\UserAccess\RoleController;

// Menu ===============================================================================================================
use App\Http\Controllers\Admin\Menu\AdminController as MenuAdminController;
use App\Http\Controllers\Admin\Menu\FrontendController as MenuFrontendController;

// Pendaftaran ========================================================================================================
use App\Http\Controllers\Admin\Pendaftaran\GFormController;
use App\Http\Controllers\Admin\PendaftaranController;

// Setting ============================================================================================================
use App\Http\Controllers\Admin\Setting\AdminController;
use App\Http\Controllers\Admin\Setting\FrontController;
use App\Http\Controllers\Admin\Setting\HomeController;
use App\Http\Controllers\Admin\Setting\HomeSliderController;
use App\Http\Controllers\Admin\Setting\VisiMisiController;
use App\Http\Controllers\Admin\Setting\AboutController;

// Utility ============================================================================================================
use App\Http\Controllers\Admin\Utility\HariBesarNasionalController;
use App\Http\Controllers\Admin\Utility\NotifAdminAtasController;
use App\Http\Controllers\Admin\Utility\NotifDepanAtasController;

// Produk ============================================================================================================
use App\Http\Controllers\Admin\Produk\KategoriController as ProdukKategoriController;
use App\Http\Controllers\Admin\Produk\ProdukController;

// Home ===============================================================================================================
use App\Http\Controllers\Admin\Home\KataKataController;
use App\Http\Controllers\Admin\Home\PengurusController;
use App\Http\Controllers\Admin\Home\ProgramPembelajaranController;
use App\Http\Controllers\Admin\Home\TestimonialController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\TahapanController;
use App\Http\Controllers\Admin\Produk\MarketplaceController;
use App\Http\Controllers\Admin\VistorController;

// Portfolio ==========================================================================================================
use App\Http\Controllers\Admin\Portfolio\KategoriController as PortfolioKategoriController;
use App\Http\Controllers\Admin\Portfolio\PortfolioController;
use App\Http\Controllers\Admin\Portfolio\SubKategoriController as PortfolioSubKategoriController;

// Portfolio ==========================================================================================================
use App\Http\Controllers\Admin\SPK\SAW\SAWController as SPK_SAW_Controller;
use App\Http\Controllers\Admin\SPK\SAW\KriteriaController as SPK_SAW_KriteriaController;
use App\Http\Controllers\Admin\SPK\SAW\AlternatifController as SPK_SAW_AlternatifController;
use App\Http\Controllers\Admin\SPK\WP\WPController as SPK_WP_Controller;
use App\Http\Controllers\Admin\SPK\WP\KriteriaController as SPK_WP_KriteriaController;
use App\Http\Controllers\Admin\SPK\WP\AlternatifController as SPK_WP_AlternatifController;

// Portfolio ==========================================================================================================
use App\Http\Controllers\Admin\Import\KecamatanController as ImportKecamatanController;
use App\Http\Controllers\Admin\Import\CalonController as ImportCalonController;

// ====================================================================================================================



$name = 'admin';
$prefix = 'dashboard';
Route::group(
    [
        'prefix' => $prefix,
        'middleware' => "permission:$name.$prefix",
        'controller' => DashboardController::class
    ],
    function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.dashboard
        Route::get('/', 'index')->name($name);
        Route::get('/vistor_counter', 'vistor_counter')->name("$name.vistor_counter");
    }
);

Route::get('/', fn () => Redirect::route('admin.dashboard'));

$prefix = 'user';
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/excel', 'excel')->name("$name.excel")->middleware("permission:$name.excel");

    Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
    Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'artikel';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.artikel

    $prefix = 'data';
    Route::controller(ArtikelController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.artikel.data
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/add', 'add')->name("$name.add")->middleware("permission:$name.insert");
        Route::get('/edit/{artikel}', 'edit')->name("$name.edit")->middleware("permission:$name.update");

        Route::delete('/{artikel}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/insert', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'kategori';
    Route::controller(KategoriController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; //admin.artikel.kategori
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'tag';
    Route::controller(TagController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.artikel.tag
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });
});

$prefix = 'galeri';
Route::controller(GaleriController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.galeri
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'social_media';
Route::controller(SocialMediaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.social_media
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'home';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.home

    $prefix = 'kata_kata';
    Route::controller(KataKataController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.home.kata_kata
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'program_pembelajaran';
    Route::controller(ProgramPembelajaranController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.home.program_pembelajaran
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'pengurus';
    Route::controller(PengurusController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.home.pengurus
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'testimonial';
    Route::controller(TestimonialController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.home.testimonial
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'banner';
Route::controller(BannerController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.banner
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
});

$prefix = 'client';
Route::controller(ClientController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.client
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
});

$prefix = 'pendaftaran';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.pendaftaran

    $prefix = 'gform';
    Route::controller(GFormController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.pendaftaran.gform
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/member', 'member_select2')->name("$name.member")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'santri';
    Route::controller(PendaftaranController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.pendaftaran.santri
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/set_status/{model}', 'set_status')->name("$name.set_status")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'utility';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.utility
    $prefix = 'notif_depan_atas';
    Route::controller(NotifDepanAtasController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.utility.notif_depan_atas
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'notif_admin_atas';
    Route::controller(NotifAdminAtasController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.utility.notif_admin_atas
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'hari_besar_nasional';
    Route::controller(HariBesarNasionalController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.utility.hari_besar_nasional
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/list_error', 'list_error')->name("$name.list_error")->middleware("permission:$name");
    });
});

$prefix = 'user_access';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user_access

    $prefix = 'permission';
    Route::controller(PermissionController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.permission
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'role';
    Route::controller(RoleController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.role
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/create', 'create')->name("$name.create")->middleware("permission:$name.insert");
        Route::get('/edit/{model}', 'edit')->name("$name.edit")->middleware("permission:$name.update");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'menu';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.menu

    $prefix = 'admin';
    Route::controller(MenuAdminController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.menu.admin
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::put('/save', 'save')->name("$name.save")->middleware("permission:$name.save");

        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

        Route::get('/list', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/parent_list', 'parent_list')->name("$name.parent_list")->middleware("permission:$name");
    });

    $prefix = 'frontend';
    Route::controller(MenuFrontendController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.menu.frontend
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::put('/save', 'save')->name("$name.save")->middleware("permission:$name.save");

        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

        Route::get('/list', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/parent_list', 'parent_list')->name("$name.parent_list")->middleware("permission:$name");
    });
});

$prefix = "setting";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.setting

    $prefix = 'admin';
    $name_ = "$name.$prefix"; // admin.setting.admin
    Route::group([
        'controller' => AdminController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);
        Route::post('/save/app', 'save_app')->name("$name_.save.app");
        Route::post('/save/meta', 'save_meta')->name("$name_.save.meta");

        Route::get('/meta', 'meta_list')->name("$name_.meta");
        Route::post('/meta/insert', 'meta_insert')->name("$name_.meta.insert");
        Route::post('/meta/update', 'meta_update')->name("$name_.meta.update");
        Route::delete('/meta/delete', 'meta_delete')->name("$name_.meta.delete");
    });

    $prefix = 'front';
    $name_ = "$name.$prefix"; // admin.setting.front
    Route::group([
        'controller' => FrontController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);
        Route::post('/save/app', 'save_app')->name("$name_.save.app");
        Route::post('/save/meta', 'save_meta')->name("$name_.save.meta");

        Route::get('/meta', 'meta_list')->name("$name_.meta");
        Route::post('/meta/insert', 'meta_insert')->name("$name_.meta.insert");
        Route::post('/meta/update', 'meta_update')->name("$name_.meta.update");
        Route::delete('/meta/delete', 'meta_delete')->name("$name_.meta.delete");
    });

    $prefix = 'home';
    $name_ = "$name.$prefix"; // admin.setting.home
    Route::group([
        'controller' => HomeController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);

        // save
        $method = 'hero';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'galeri';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'artikel';
        Route::post("/$method", $method)->name("$name_.$method");
    });

    $prefix = 'home_slider';
    Route::controller(HomeSliderController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.setting.home_slider
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'visi_misi';
    Route::controller(VisiMisiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.setting.visi_misi
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'about';
    Route::controller(AboutController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.setting.about
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });
});

$prefix = 'kontak';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.kontak
    $prefix = 'faq';
    Route::controller(FAQController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kontak.faq
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
    });

    $prefix = 'list';
    Route::controller(ListContactController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kontak.list
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
    });

    $prefix = 'message';
    Route::controller(MessageController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kontak.message
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});


$prefix = 'produk';
Route::prefix($prefix)->group(function () use ($prefix, $name) {
    $name = "$name.$prefix"; // admin.produk
    Route::controller(ProdukController::class)->group(function () use ($name) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/tambah', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::get('/ubah/{produk}', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/save/{produk}', 'save')->name("$name.save")->middleware("permission:$name.insert");

        Route::get('/foto', 'foto_datatable')->name("$name.foto")->middleware("permission:$name.insert|$name.update");
        Route::get('/foto_find', 'foto_find')->name("$name.foto.find")->middleware("permission:$name.insert|$name.update");
        Route::post('/foto/insert', 'foto_insert')->name("$name.foto.insert")->middleware("permission:$name.insert|$name.update");
        Route::post('/foto/update', 'foto_update')->name("$name.foto.update")->middleware("permission:$name.insert|$name.update");
        Route::delete('/foto/{model}', 'foto_delete')->name("$name.foto.delete")->middleware("permission:$name.insert|$name.update");

        Route::get('/prod_mt', 'marketplace_datatable')->name("$name.prod_mt")->middleware("permission:$name.insert|$name.update");
        Route::get('/prod_mt_find', 'marketplace_find')->name("$name.prod_mt.find")->middleware("permission:$name.insert|$name.update");
        Route::post('/prod_mt/insert', 'marketplace_insert')->name("$name.prod_mt.insert")->middleware("permission:$name.insert|$name.update");
        Route::post('/prod_mt/update', 'marketplace_update')->name("$name.prod_mt.update")->middleware("permission:$name.insert|$name.update");
        Route::delete('/prod_mt/{model}', 'marketplace_delete')->name("$name.prod_mt.delete")->middleware("permission:$name.insert|$name.update");

        // produk delete
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'marketplace';
    Route::prefix($prefix)->controller(MarketplaceController::class)->group(function () use ($prefix, $name) {
        $name = "$name.$prefix"; // admin.produk.marketplace
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'kategori';
    Route::prefix($prefix)->controller(ProdukKategoriController::class)->group(function () use ($prefix, $name) {
        $name = "$name.$prefix"; // admin.produk.kategori
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'portfolio';
Route::prefix($prefix)->group(function () use ($prefix, $name) {
    $name = "$name.$prefix"; // admin.portfolio
    Route::controller(PortfolioController::class)->group(function () use ($name) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/tambah', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::get('/ubah/{portfolio}', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/save/{portfolio}', 'save')->name("$name.save")->middleware("permission:$name.insert");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");

        Route::get('/item', 'item_datatable')->name("$name.item")->middleware("permission:$name.insert|$name.update");
        Route::get('/item_find', 'item_find')->name("$name.item.find")->middleware("permission:$name.insert|$name.update");
        Route::post('/item/insert', 'item_insert')->name("$name.item.insert")->middleware("permission:$name.insert|$name.update");
        Route::post('/item/update', 'item_update')->name("$name.item.update")->middleware("permission:$name.insert|$name.update");
        Route::delete('/item/{model}', 'item_delete')->name("$name.item.delete")->middleware("permission:$name.insert|$name.update");

        // portfolio delete
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'kategori';
    Route::prefix($prefix)->controller(PortfolioKategoriController::class)->group(function () use ($prefix, $name) {
        $name = "$name.$prefix"; // admin.portfolio.kategori
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'sub_kategori';
    Route::prefix($prefix)->controller(PortfolioSubKategoriController::class)->group(function () use ($prefix, $name) {
        $name = "$name.$prefix"; // admin.portfolio.sub_kategori
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/{kategori:slug}', 'index')->name($name)->middleware("permission:$name");
    });
});


$prefix = "profile";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.profile
    Route::get('/', 'profile')->name($name)->middleware("permission:$name");
    Route::post('/save', 'save_profile')->name("$name.save")->middleware("permission:$name.save");
    Route::post('/save/password', 'save_password')->name("$name.password.save")->middleware("permission:$name.password.save");
});

$prefix = 'vistor';
Route::prefix($prefix)->controller(VistorController::class)->group(function () use ($prefix, $name) {
    $name = "$name.$prefix"; // admin.vistor
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
    Route::get('/refresh_detail_ip', 'refresh_detail_ip')->name("$name.refresh_detail_ip")->middleware("permission:$name");
});

$prefix = "password";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.password
    Route::get('/', 'change_password')->name($name)->middleware("permission:$name");
    Route::post('/save', 'save_password')->name("$name.save")->middleware("permission:$name.save");
});

$prefix = 'spk';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.spk

    $prefix = 'saw';
    Route::prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.spk.saw
        Route::controller(SPK_SAW_Controller::class)->group(function () use ($name) {
            Route::get('/', 'index')->name($name)->middleware("permission:$name");
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/perhitungan/{spk:slug}', 'perhitungan')->name("$name.perhitungan")->middleware("permission:$name");
            Route::get('/{spk:slug}', 'detail')->name("$name.detail")->middleware("permission:$name");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        });


        $prefix = 'kriteria';
        Route::controller(SPK_SAW_KriteriaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.spk.saw.kriteria
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
            Route::get('/datatable', 'datatable')->name("$name.datatable")->middleware("permission:$name");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/{spk:slug}', 'index')->name($name)->middleware("permission:$name");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        });

        $prefix = 'alternatif';
        Route::controller(SPK_SAW_AlternatifController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.spk.saw.alternatif
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
            Route::get('/datatable/{spk:slug}', 'datatable')->name("$name.datatable")->middleware("permission:$name");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/kriteria/{spk:slug}', 'kriteria')->name("$name.kriteria")->middleware("permission:$name");
            Route::get('/{spk:slug}', 'index')->name($name)->middleware("permission:$name");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        });
    });

    $prefix = 'wp';
    Route::prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.spk.wp
        Route::controller(SPK_WP_Controller::class)->group(function () use ($name) {
            Route::get('/', 'index')->name($name)->middleware("permission:$name");
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/perhitungan/{spk:slug}', 'perhitungan')->name("$name.perhitungan")->middleware("permission:$name");
            Route::get('/{spk:slug}', 'detail')->name("$name.detail")->middleware("permission:$name");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        });


        $prefix = 'kriteria';
        Route::controller(SPK_WP_KriteriaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.spk.wp.kriteria
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
            Route::get('/datatable', 'datatable')->name("$name.datatable")->middleware("permission:$name");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/{spk:slug}', 'index')->name($name)->middleware("permission:$name");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        });

        $prefix = 'alternatif';
        Route::controller(SPK_WP_AlternatifController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.spk.wp.alternatif
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
            Route::get('/datatable/{spk:slug}', 'datatable')->name("$name.datatable")->middleware("permission:$name");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/kriteria/{spk:slug}', 'kriteria')->name("$name.kriteria")->middleware("permission:$name");
            Route::get('/{spk:slug}', 'index')->name($name)->middleware("permission:$name");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        });
    });
});

$prefix = 'kecamatan';
Route::controller(KecamatanController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.kecamatan
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
});

$prefix = 'tahapan';
Route::controller(TahapanController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.tahapan
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
});

$prefix = 'calon';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.calon
    Route::controller(CalonController::class)->group(function () use ($name, $prefix) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'nilai';
    Route::controller(CalonNilaiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.calon.nilai
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/datatable', 'datatable')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/datatable', 'datatable')->name("$name.datatable")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'import';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.import

    $prefix = 'kecamatan';
    Route::controller(ImportKecamatanController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.import.kecamatan
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/format', 'format')->name("$name.format")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'calon';
    Route::controller(ImportCalonController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.import.calon
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/format', 'format')->name("$name.format")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});
