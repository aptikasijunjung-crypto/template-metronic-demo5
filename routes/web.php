<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\{DashboardController, FrontController, LoginController, PengaduanController, ProfilController};
use App\Http\Middleware\GoogleMiddleware;

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/auth-google-callback', 'callback');
    Route::get('/auth/google/redirect', 'redirect')->name('redirect');
    Route::get('/logout', 'logout')->name('logout');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('frontend.dashboard');
});
Route::middleware(GoogleMiddleware::class)->group(function () {
    Route::controller(ProfilController::class)->group(function () {
        Route::get('/profile', 'index')->name('frontend.profile');
        Route::post('/profile/edit', 'edit')->name('frontend.profile.edit');
    });
    Route::controller(PengaduanController::class)->group(function () {
        Route::get('/pengaduan', 'index')->name('frontend.pengaduan');
    });
});
