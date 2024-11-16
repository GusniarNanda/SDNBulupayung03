@extends('layout.app')

@section('content')
    <h1>Edit Berita</h1>
    <form action="{{ route('admin.beritaupdate', $berita->id) }}" method="POST" enctype="multipart/form-data"
        id="formEditBerita">
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
            <label for="konteneditor">Konten:</label>
            <div id="konteneditor"></div>
            <input type="hidden" name="konten" value="{{ old('konten', $berita->konten) }}">
        </div>
        @error('konten')
            <small style="color: red">{{ $message }}</small>
        @enderror

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

@section('scripts')
    <script>
        // Inisialisasi editor markdown untuk kolom konten
        const kontenEditor = initEditor("#konteneditor", document.querySelector('input[name="konten"]').value);

        // Menangani submit form
        document.querySelector('#formEditBerita').addEventListener('submit', e => {
            e.preventDefault();

            // Ambil konten dari editor markdown dan set ke input hidden
            document.querySelector('input[name="konten"]').value = kontenEditor.getHTML();
            e.target.submit();
        });
    </script>
@endsection
