<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Contoh data dummy, bisa diganti dengan data dari database
        $data = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Keyboard'],
            ['id' => 3, 'produk' => 'Mouse']
        ];

        return view('list_product', ['data' => $data]);
    }
}
