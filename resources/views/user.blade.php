@extends('adminlte::page')

@section('title', 'Data User')

@section('content_header')
    <h1>Data User</h1>
@stop

@section('content')
    <a href="/user/tambah">+ Tambah User</a>
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
            @foreach ($data as $d)
                
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td><a href="/user/ubah/{{ $d->user_id }}">Ubah</a> | <a href="/user/hapus/{{ $d->user_id }}">Hapus</a></td>
            </tr>
            @endforeach

        </tbody>
        {{-- <thead>
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
        </thead>
        <tbody>
            <td>{{ $data }}</td>
        </tbody> --}}


    </table>
@stop
