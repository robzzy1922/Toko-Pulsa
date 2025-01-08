<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-process');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');


// Route::get('/registration', [LoginController::class, 'registration'])->name('registration');