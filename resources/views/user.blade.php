@extends('adminlte::page')

@section('title', 'Data User')

@section('content_header')
    <h1>Data User</h1>
@stop

@section('content')

    <table class="table table-bordered">

        {{-- <thead>
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

        </tbody> --}}
        <thead>
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
        </thead>
        <tbody>
            <td>{{ $data }}</td>
        </tbody>


    </table>
@stop
