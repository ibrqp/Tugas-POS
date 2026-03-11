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
Route::resource('user', UserController::class);
