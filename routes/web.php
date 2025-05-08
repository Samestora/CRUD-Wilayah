<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WilayahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [WilayahController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [WilayahController::class, 'search'])->name('dashboard');
});

// CRUD Auth -> Wilayah
Route::middleware('auth')->group(function () {
    Route::get('wilayahs/create', [WilayahController::class, 'create'])->name('wilayahs.create');
    Route::post('wilayahs/create', [WilayahController::class, 'store'])->name('wilayahs.store');
});

// Individual wilayah
Route::middleware('auth')->group(function () {
    Route::get('wilayahs/{wilayah}', [WilayahController::class, 'view'])->name('wilayahs.view');
    Route::get('wilayahs/{wilayah}/edit', [WilayahController::class, 'edit'])->name('wilayahs.edit');
    Route::put('wilayahs/{wilayah}', [WilayahController::class, 'update'])->name('wilayahs.update');
    Route::delete('wilayahs/{wilayah}', [WilayahController::class, 'destroy'])->name('wilayahs.destroy');
});
require __DIR__ . '/auth.php';
