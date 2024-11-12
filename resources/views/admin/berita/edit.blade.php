@extends('layout.app')

@section('content')
    <h1>Edit Berita</h1>
    <form action="{{ route('admin.beritaupdate', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Form field untuk Judul -->
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul', $berita->judul) }}"
                required>
        </div>

        <!-- Form field untuk Konten -->
        <div class="form-group">
            <label for="konten">Konten:</label>
            <textarea class="form-control" name="konten" id="konten" required>{{ old('konten', $berita->konten) }}</textarea>
        </div>

        <!-- Form field untuk Gambar -->
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
            @if ($berita->gambar)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar Berita" style="width: 100px;">
            @endif
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>

        <!-- Link untuk kembali -->
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
