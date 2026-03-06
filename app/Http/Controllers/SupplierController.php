<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{

    public function index()
    {
        $supplier = DB::table('m_supplier')->get();
        return view('supplier.index', compact('supplier'));
    }

    public function store(Request $request)
    {

        DB::table('m_supplier')->insert([
            'supplier_kode' => $request->supplier_kode,
            'supplier_nama' => $request->supplier_nama,
            'supplier_alamat' => $request->supplier_alamat
        ]);

        return redirect('/supplier');
    }

}