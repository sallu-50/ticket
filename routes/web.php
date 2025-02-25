<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'loginForm'])->name('login');
Route::get('/sign-up', [HomeController::class, 'registerForm'])->name('sign-up');
Route::get('/verification', [HomeController::class, 'verification'])->name('verification');

Route::get('/features_details', [HomeController::class, 'features_details'])->name('features_details');
