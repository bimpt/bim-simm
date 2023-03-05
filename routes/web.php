<?php

use App\Http\Controllers\Auth\{LoginController, LogoutController};
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Pengaturan\{AplikasiController, PenggunaController};
use App\Http\Controllers\Guest\LandingPageController;
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

Route::post('logout', [LogoutController::class, 'index'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('dasbor', DashboardController::class)->name('dasbor');

    Route::prefix('master-data')->group(function () {
        // menu master-data
    });

    Route::prefix('transaksi')->group(function () {
        //menu transaksi
    });

    Route::prefix('pengaturan')->group(function () {
        Route::resource("pengguna", PenggunaController::class)->except(["show"]);
        Route::delete('/hapus-data-pengguna', [PenggunaController::class, 'deleteChecked'])->name('pengguna.deleteSelected');

        Route::resource("aplikasi", AplikasiController::class)->except(["show"]);
        Route::put("aplikasi/update-image/{id}", [AplikasiController::class, 'updateImage'])->name('aplikasi.updateImage');
    });
});

/** Guest */
Route::middleware('guest')->group(function () {
    Route::get('/', [LandingPageController::class, "index"])->name('landingpage');

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']); // valid jika ingin panggil route di formya
});
