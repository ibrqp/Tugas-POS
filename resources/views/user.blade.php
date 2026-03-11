@extends('adminlte::page')

@section('title', 'Data Barang')

@section('content_header')
    <h1>Data Barang</h1>
@stop

@section('content')

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Level ID</th>
                <th>Username</th>
                <th>Nama</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($data as $b)
                <tr>
                    <td>{{ $b->user_id }}</td>
                    <td>{{ $b->level_id }}</td>
                    <td>{{ $b->username }}</td>
                    <td>{{ $b->nama }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>
@stop
