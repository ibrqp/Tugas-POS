<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('penjualan', PenjualanController::class);
Route::get('/user', [UserController::class, 'index']);


Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);