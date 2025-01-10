<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-process');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registration'])->name('register-process');


Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/manage-user', [UserController::class, 'index'])->name('manage-user');
    Route::post('/user-datatable', [UserController::class, 'datatable'])->name('user-datatable');
    Route::get('/manage-user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
    Route::get('/manage-user-delete/{id}', [UserController::class, 'destroy'])->name('user-delete');
    Route::put('/manage-user-update/{id}', [UserController::class, 'update'])->name('user-update');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //manage pulsa
    Route::get('/manage-product-pulsa', [ProductController::class, 'index'])->name('manage-pulsa');
    Route::post('/pulsa-datatable', [ProductController::class, 'datatable'])->name('pulsa-datatable');
    Route::get('/manage-pulsa-edit/{id}', [ProductController::class, 'edit'])->name('pulsa-edit');
    Route::get('/manage-pulsa-delete/{id}', [ProductController::class, 'destroy'])->name('pulsa-delete');
    Route::put('/manage-pulsa-update/{id}', [ProductController::class, 'update'])->name('pulsa-update');


    //manage barang
    Route::get('/manage-product-barang', [BarangController::class, 'index'])->name('manage-pulsa');
    Route::post('/barang-datatable', [BarangController::class, 'datatable'])->name('barang-datatable');
    Route::get('/manage-barang-edit/{id}', [BarangController::class, 'edit'])->name('barang-edit');
    Route::get('/manage-barang-delete/{id}', [BarangController::class, 'destroy'])->name('barang-delete');
    Route::put('/manage-barang-update/{id}', [BarangController::class, 'update'])->name('barang-update');
});