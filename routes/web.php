<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkincareController;

Route::get('/', function () {
    return 'Kimberly D. Benavidez | 2023-70908 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/skincare', [SkincareController::class, 'index'])
    ->name('skincare.index');

Route::get('/skincare/featured', [SkincareController::class, 'featured'])
    ->name('skincare.featured');

Route::get('/skincare/filter/{value?}', [SkincareController::class, 'filter'])
    ->name('skincare.filter');

Route::get('/skincare/{id}', [SkincareController::class, 'show'])
    ->name('skincare.show');