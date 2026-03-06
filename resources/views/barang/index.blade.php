@extends('adminlte::page')

@section('title', 'Data Barang')

@section('content_header')
    <h1>Data Barang</h1>
@stop

@section('content')

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">
        Tambah Barang
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($barang as $b)
                <tr>
                    <td>{{ $b->barang_kode }}</td>
                    <td>{{ $b->barang_nama }}</td>
                    <td>{{ $b->kategori_nama }}</td>
                    <td>{{ $b->harga_beli }}</td>
                    <td>{{ $b->harga_jual }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

@stop
