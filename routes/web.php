<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [HomeController::class, 'loginForm'])->name('login');
Route::get('/Register', [HomeController::class, 'registerForm'])->name('register');
Route::get('/verification', [HomeController::class, 'verification'])->name('verification');

Route::get('/features_details', [HomeController::class, 'features_details'])->name('features_details');
