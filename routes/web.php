<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('cars.index');
});

Route::resource('cars', CarController::class);
Route::resource('countries', CountryController::class);

Route::get('/stats', [StatsController::class, 'pages'])->name('stats.pages');
Route::get('/stats/detail', [StatsController::class, 'detail'])->name('stats.detail');
Route::get('/stats/popular', [StatsController::class, 'popular'])->name('stats.popular');
