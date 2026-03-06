<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{

    public function index()
    {
        $barang = DB::table('m_barang')
        ->join('m_kategori','m_barang.kategori_id','=','m_kategori.kategori_id')
        ->select('m_barang.*','m_kategori.kategori_nama')
        ->get();

        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        $kategori = DB::table('m_kategori')->get();
        return view('barang.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        DB::table('m_barang')->insert([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual
        ]);

        return redirect('/barang');
    }

}