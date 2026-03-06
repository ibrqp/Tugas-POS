<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = DB::table('m_kategori')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {

        DB::table('m_kategori')->insert([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama
        ]);

        return redirect('/kategori');
    }

}