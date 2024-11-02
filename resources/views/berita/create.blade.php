@extends('layouts.app')

@section('content')
<h1>Tambah Berita</h1>
<form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" name="judul" id="judul" required>
    </div>
    <div class="form-group">
        <label for="konten">Konten:</label>
        <textarea class="form-control" name="konten" id="konten" required></textarea>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar:</label>
        <input type="file" class="form-control" name="gambar" id="gambar">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
