<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AdController::class, 'getAds']);

Route::get('/create-ads', [\App\Http\Controllers\AdController::class, 'render']);

Route::post('/actions/create-ads', [\App\Http\Controllers\AdController::class, 'createAdsAction']);

Route::get('/ads/all/{adName}', [\App\Http\Controllers\AdController::class, 'loadAds']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
