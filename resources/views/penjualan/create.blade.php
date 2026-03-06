@extends('adminlte::page')

@section('title', 'Transaksi Penjualan')

@section('content_header')
    <h1>Transaksi Penjualan</h1>
@stop

@section('content')

    <form action="{{ route('penjualan.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label>Nama Pembeli</label>
            <input type="text" name="pembeli" class="form-control">
        </div>

        <div class="form-group">
            <label>Pilih Barang</label>

            <select name="barang_id" class="form-control">

                @foreach ($barang as $b)
                    <option value="{{ $b->barang_id }}">
                        {{ $b->barang_nama }} - {{ $b->harga_jual }}
                    </option>
                @endforeach

            </select>

        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control">
        </div>

        <button class="btn btn-primary">
            Proses Transaksi
        </button>

    </form>

@stop
