<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublicViewController;

Route::get('/contoh', [PublicViewController::class, 'show']);


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'User dengan isd' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
Route::get('/users', function () {
    return 'Admin Users';
});
});

Route::get('/pages/home', [HomeController::class, 'index'])->name('home');


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');


Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);


