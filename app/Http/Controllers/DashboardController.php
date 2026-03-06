<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $barang = DB::table('m_barang')->count();
        $kategori = DB::table('m_kategori')->count();
        $supplier = DB::table('m_supplier')->count();

        return view('dashboard', compact('barang', 'kategori', 'supplier'));
    }
}
