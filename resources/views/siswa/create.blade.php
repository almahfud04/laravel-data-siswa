@extends('layouts.app')

@section('content')
<h1>Tambah Siswa</h1>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="text" class="form-control" id="umur" name="umur" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
