<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/registration', [HomeController::class, 'registrationForm'])->name('registration');
Route::get('/features_details', [HomeController::class, 'features_details'])->name('features_details');
