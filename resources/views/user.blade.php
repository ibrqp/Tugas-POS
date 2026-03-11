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

                <tr>
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->level_id }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->nama }}</td>
                </tr>

        </tbody>
    </table>
@stop
