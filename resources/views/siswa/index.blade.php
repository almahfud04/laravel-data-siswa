@extends('layouts.app')

@section('content')
<h1>Data Siswa</h1>
<a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswas as $siswa)
        <tr>
            <td>{{ $siswa->id }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->umur }}</td>
            <td>
            
                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline-block;">
                @csrf
                     @method('DELETE') <!-- Ini penting untuk mendefinisikan metode DELETE -->
                 <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
