@extends('layouts.app')

@section('content')
<h1>Edit Data Siswa</h1>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')  <!-- Add this line for RESTful update -->
    
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" required> <!-- Pre-fill value -->
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $siswa->email) }}" required> <!-- Pre-fill value -->
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" id="umur" name="umur" value="{{ old('umur', $siswa->umur) }}" required> <!-- Pre-fill value -->
    </div>
    
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
