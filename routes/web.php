<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-process');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registration'])->name('register-process');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/manage-user', [UserController::class, 'index'])->name('manage-user');
Route::post('/user-datatable', [UserController::class, 'datatable'])->name('user-datatable');
Route::get('/manage-user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
Route::get('/manage-user-delete/{id}', [UserController::class, 'destroy'])->name('user-delete');
Route::put('/manage-user-update/{id}', [UserController::class, 'update'])->name('user-update');