<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function registrationForm()
    {
        return view('registration');
    }

    public function features_details()
    {
        return view('features_details');
    }
}
