<?php

use App\Http\Controllers\frontend\FrontController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
});
