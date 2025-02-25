<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function loginForm()
    {
        return view('login');
    }

    public function registerForm()
    {

        return view('register');
    }

    public function verification()
    {
        return view('verification');
    }

    public function features_details()
    {
        return view('features_details');
    }
}
