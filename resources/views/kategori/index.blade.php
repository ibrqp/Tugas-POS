@extends('adminlte::page')

@section('title', 'Kategori')

@section('content_header')
    <h1>Data Kategori</h1>
@stop

@section('content')

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($kategori as $k)
                <tr>
                    <td>{{ $k->kategori_id }}</td>
                    <td>{{ $k->kategori_kode }}</td>
                    <td>{{ $k->kategori_nama }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

@stop
