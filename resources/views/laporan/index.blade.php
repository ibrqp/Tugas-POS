@extends('adminlte::page')

@section('title', 'Laporan Penjualan')

@section('content_header')
    <h1>Laporan Penjualan</h1>
@stop

@section('content')

    <table class="table table-bordered">

        <thead>

            <tr>
                <th>Kode Transaksi</th>
                <th>Pembeli</th>
                <th>Tanggal</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($penjualan as $p)
                <tr>
                    <td>{{ $p->penjualan_kode }}</td>
                    <td>{{ $p->pembeli }}</td>
                    <td>{{ $p->penjualan_tanggal }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

@stop
