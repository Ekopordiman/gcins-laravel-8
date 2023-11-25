@extends('layouts.app')

@section('header')
    <h1>List Pemain Film</h1>
@endsection

@section('content')
    <a href="{{ url('cast/create') }}" class="btn btn-primary">Tambah Pemain Film</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($casts as $cast)
                <tr>
                    <td>{{ $cast->id }}</td>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td>
                        <a href="{{ url('/cast/'.$cast->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ url('/cast/'.$cast->id.'/edit') }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/cast/'.$cast->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
