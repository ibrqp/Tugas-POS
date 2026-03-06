@extends('adminlte::page')

@section('title', 'Supplier')

@section('content_header')
    <h1>Data Supplier</h1>
@stop

@section('content')

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($supplier as $s)
                <tr>
                    <td>{{ $s->supplier_id }}</td>
                    <td>{{ $s->supplier_kode }}</td>
                    <td>{{ $s->supplier_nama }}</td>
                    <td>{{ $s->supplier_alamat }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

@stop
