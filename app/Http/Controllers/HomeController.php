<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home'); // Ganti 'home' dengan nama file blade kamu, misalnya home.blade.php
    }
}
