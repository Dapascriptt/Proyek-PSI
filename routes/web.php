<?php

use App\Http\Controllers\Admin\PesananController as AdminPesananController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Authentication
Route::get('/login', [AuthController::class, 'login_page'])->name('login-page')->middleware(['guest']);
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware(['guest']);
Route::get('/register', [AuthController::class, 'register_page'])->name('register-page')->middleware(['guest']);
Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware(['guest']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home Page
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/katalog', [HomeController::class, 'katalog'])->name('katalog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/pesananku', [HomeController::class, 'pesananku'])->name('pesananku');
Route::get('/katalog-detail/{id}', [HomeController::class, 'katalog_detail'])->name('katalog-detail');
Route::get('/katalog-detail/{id}/buat-pesanan', [HomeController::class, 'buat_pesanan'])->name('buat-pesanan');


// Admin
Route::middleware(['admin'])->group(function () {
    // Pesanan
    Route::get('/dashboard/pesanan', [AdminPesananController::class, 'index'])->name('admin');
    Route::put('/dashboard/pesanan/{id}/update', [AdminPesananController::class, 'update'])->name('pesanan-update');
    Route::delete('/pesanan/{id}', [AdminPesananController::class, 'destroy'])->name('pesanan-delete');
    
    // Katalog
    Route::get('dashboard/produk', [ProdukController::class, 'index'])->name('produk-table');
    Route::get('dashboard/produk-add', [ProdukController::class, 'create'])->name('produk-add');
    Route::post('dashboard/produk-add', [ProdukController::class, 'store'])->name('produk-store');
    Route::get('dashboard/produk-edit/{id}', [ProdukController::class, 'edit'])->name('produk-edit');
    Route::post('dashboard/produk-edit/{id}', [ProdukController::class, 'update'])->name('produk-update');
    Route::post('dashboard/produk-delete/{id}', [ProdukController::class, 'destroy'])->name('produk-delete');

    // Review
    Route::get('dashboard/review', [ReviewController::class, 'index'])->name('review-table');
    Route::get('dashboard/review-add', [ReviewController::class, 'create'])->name('review-add');
    Route::post('dashboard/review-add', [ReviewController::class, 'store'])->name('review-store');
    Route::get('dashboard/review-edit/{id}', [ReviewController::class, 'edit'])->name('review-edit');
    Route::post('dashboard/review-edit/{id}', [ReviewController::class, 'update'])->name('review-update');
    Route::post('dashboard/review-delete/{id}', [ReviewController::class, 'destroy'])->name('review-delete');
});

