<?php

use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\MahasiswaMainController;
use App\Http\Controllers\ManajemenUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// MAHASISWA AUTH
Route::post('register-save', [AuthUserController::class, 'registerSave'])->name('m.register.save');
Route::post('login-check', [AuthUserController::class, 'loginCheck'])->name('m.login.check');
Route::get('logout', [AuthUserController::class, 'logout'])->name('logout');

// MAHASISWA
Route::group(['middleware' => ['auth.user.check']], function() {
    // MAHASISWA AUTH
    Route::get('login', [AuthUserController::class, 'loginPage'])->name('m.login');
    Route::get('register', [AuthUserController::class, 'registerPage'])->name('m.register');

    // MAHASISWA PAGE
    Route::get('/dashboard', [MahasiswaMainController::class, 'dashboard'])->name('m.dashboard');
    Route::get('/profile', [MahasiswaMainController::class, 'profile'])->name('m.profile');
    Route::post('/profile', [MahasiswaMainController::class, 'profileStore'])->name('m.profile.store');
    Route::post('/profile/update', [MahasiswaMainController::class, 'profileUpdate'])->name('m.profile.update');

    Route::get('/slip-pembayaran', [MahasiswaMainController::class, 'slipPembayaran'])->name('m.slip.pembayaran');



});

Route::get('/admin', function () {
    return redirect()->route('a.login');
});

// ADMIN
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login',[AuthAdminController::class, 'loginPage'])->name('a.login');
    Route::post('login-check', [AuthAdminController::class, 'loginCheck'])->name('a.login.check');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('logout',[AuthAdminController::class, 'logout'])->name('a.logout');
        Route::get('/dashboard', [AdminMainController::class, 'dashboard'])->name('a.dashboard');

        // Mata Kuliah
        Route::get('/matakuliah', [AdminMainController::class, 'matakuliah'])->name('a.matakuliah');
        Route::post('/matakuliah', [AdminMainController::class, 'matakuliahAdd'])->name('a.matakuliah-add');
        Route::get('/matakuliah/edit/{id}', [AdminMainController::class, 'matakuliahEdit'])->name('a.matakuliah-edit');
        Route::post('/matakuliah/edit', [AdminMainController::class, 'matakuliahUpdate'])->name('a.matakuliah-update');
        Route::get('/matakuliah/delete/{id}', [AdminMainController::class, 'matakuliahDelete'])->name('a.matakuliah-delete');

        // Program Studi
        Route::get('/prodi', [AdminMainController::class, 'prodi'])->name('a.prodi');
        Route::post('/prodi', [AdminMainController::class, 'prodiAdd'])->name('a.prodi-add');
        Route::get('/prodi/edit/{id}', [AdminMainController::class, 'prodiEdit'])->name('a.prodi-edit');
        Route::post('/prodi/edit', [AdminMainController::class, 'prodiUpdate'])->name('a.prodi-update');
        Route::get('/prodi/delete/{id}', [AdminMainController::class, 'prodiDelete'])->name('a.prodi-delete');

        // Program Studi
        Route::get('/fakultas', [AdminMainController::class, 'fakultas'])->name('a.fakultas');
        Route::post('/fakultas', [AdminMainController::class, 'fakultasAdd'])->name('a.fakultas-add');
        Route::get('/fakultas/edit/{id}', [AdminMainController::class, 'fakultasEdit'])->name('a.fakultas-edit');
        Route::post('/fakultas/edit/{id}', [AdminMainController::class, 'fakultasUpdate'])->name('a.fakultas-update');
        Route::get('/fakultas/delete/{id}', [AdminMainController::class, 'fakultasDelete'])->name('a.fakultas-delete');

        // Data Mahasiswa
        Route::get('/data-mahasiswa', [AdminMainController::class, 'dataMahasiswa'])->name('a.data-mahasiswa');

        // Manajemen User
        // Mahasiswa
        Route::get('/manajemen-user', [ManajemenUserController::class, 'manajemenUser'])->name('a.manajemen-user');


        Route::get('/verifikasi/{id}', [ManajemenUserController::class, 'verifikasiUser'])->name('verifikasi.user');
        Route::get('/verifikasi-all', [ManajemenUserController::class, 'verifikasiAll'])->name('verifikasi.all');


    });

});

Route::get('/check', [CheckController::class, 'check']);


