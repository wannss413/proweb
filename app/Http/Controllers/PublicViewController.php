<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicViewController extends Controller
{
    public function show()
    {
        return view('contoh'); // ini akan memanggil file resources/views/publicview.blade.php
    }
}
