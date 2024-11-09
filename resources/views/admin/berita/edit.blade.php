@extends('layouts.app')

@section('content')
    <h1>Edit Berita</h1>
    <form action="{{ route('admin.  berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" name="judul" id="judul" value="{{ $berita->judul }}" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten:</label>
            <textarea class="form-control" name="konten" id="konten" required>{{ $berita->konten }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
            @if ($berita->gambar)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar Berita" style="width: 100px;">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
