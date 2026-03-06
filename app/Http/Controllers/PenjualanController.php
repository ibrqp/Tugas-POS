<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{

    public function index()
    {
        $penjualan = DB::table('t_penjualan')->get();
        return view('penjualan.index', compact('penjualan'));
    }

    public function create()
    {
        $barang = DB::table('m_barang')->get();
        return view('penjualan.create', compact('barang'));
    }

    public function store(Request $request)
    {

        $penjualan_id = DB::table('t_penjualan')->insertGetId([
            'pembeli' => $request->pembeli,
            'penjualan_tanggal' => date('Y-m-d')
        ]);

        DB::table('t_penjualan_detail')->insert([
            'penjualan_id' => $penjualan_id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/penjualan');
    }

}