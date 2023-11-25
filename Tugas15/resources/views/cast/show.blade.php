@extends('layouts.app')

@section('header')
    <h1>Detail Pemain Film</h1>
@endsection    

@section('content')
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $cast->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $cast->nama }}</td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>{{ $cast->umur }}</td>
            </tr>
            <tr>
                <th>Bio</th>
                <td>{{ $cast->bio }}</td>
            </tr>
        </tbody>
    </table>
@endsection
