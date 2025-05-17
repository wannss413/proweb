<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function getData()
    {
        $dataBarang = [
            ['id'=> 1, 'nama' => 'Beras Panan wangi', 'harga' => 15000],
            ['id'=> 2, 'nama' => 'tepung terigu', 'harga' => 20000],
            ['id'=> 3, 'nama' => 'Baygon cair', 'harga' => 13500],
            ['id'=> 4, 'nama' => 'Penyedap Royco', 'harga' => 3200],
            ['id'=> 5, 'nama' => 'Minyak goreng', 'harga' => 14000],
        ];

        return $dataBarang;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view("list_barang", compact('data'));
    }
}
