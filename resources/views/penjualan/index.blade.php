@extends('adminlte::page')

@section('title', 'Penjualan')

@section('content_header')
    <h1>Data Penjualan</h1>
@stop

@section('content')

    <a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-3">
        Tambah Transaksi
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Penjualan</th>
                <th>Pembeli</th>
                <th>Tanggal</th>
                <th>User</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($penjualan as $p)
                <tr>
                    <td>{{ $p->penjualan_id }}</td>
                    <td>{{ $p->penjualan_kode }}</td>
                    <td>{{ $p->pembeli }}</td>
                    <td>{{ $p->penjualan_tanggal }}</td>
                    <td>{{ $p->nama }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

@stop
