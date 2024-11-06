<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesContactController;
use Illuminate\Support\Facades\Route;

// Route Utama, tidak perlu autentikasi
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/models', [ModelController::class, 'index'])->name('models.index');
Route::get('/models/{id}', [ModelController::class, 'show'])->name('model.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [SalesContactController::class, 'index'])->name('contact');



// Rute untuk user yang telah terauthentikasi / user yang telah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute untuk User dengan Role Admin
Route::middleware(['auth', 'is_admin'])->group(function () {
    //
});

// Rute untuk Dashboard Admin (Sementara)
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute Untuk Halaman Cars Model
Route::get('/cars', [CarController::class, 'index'])->name('cars.index'); // List mobil
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
// Route untuk menampilkan form edit
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{id}/update', [CarController::class, 'update'])->name('cars.update');






// Rute Untuk Halaman Team Contact
Route::get('/contact', [SalesContactController::class, 'index'])->name('contact.index'); // List mobil
Route::get('/contact/create', [SalesContactController::class, 'create'])
    ->middleware('auth')
    ->name('contact.create');
Route::post('/contact', [SalesContactController::class, 'store'])->name('contact.store');
Route::put('/contact/{id}/update', [SalesContactController::class, 'update'])->name('contact.update');

// Direktori File Auntentikasi
require __DIR__ . '/auth.php';
