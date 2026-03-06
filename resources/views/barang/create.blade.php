@extends('adminlte::page')

@section('title', 'Tambah Barang')

@section('content_header')
    <h1>Tambah Barang</h1>
@stop

@section('content')

    <form action="{{ route('barang.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="barang_kode" class="form-control">
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="barang_nama" class="form-control">
        </div>

        <div class="form-group">
            <label>Kategori</label>

            <select name="kategori_id" class="form-control">

                @foreach ($kategori as $k)
                    <option value="{{ $k->kategori_id }}">
                        {{ $k->kategori_nama }}
                    </option>
                @endforeach

            </select>

        </div>

        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>

    </form>

@stop
