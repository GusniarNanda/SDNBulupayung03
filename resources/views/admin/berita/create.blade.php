@extends('layout.app')
@section('title', 'Tambah Berita')

@section('content')
    <div class="container">
        <a href="/admin/berita" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>Berhasil </strong>
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data"
                    id="formTambahBerita">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="{{ old('judul') }}">
                    </div>
                    @error('judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="konteneditor">Konten</label>
                        <div id="konteneditor"></div>
                        <input type="hidden" name="konten" value="{{ old('konten') }}">
                    </div>
                    @error('konten')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    @error('gambar')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Inisialisasi editor markdown untuk kolom konten
        const kontenEditor = initEditor("#konteneditor", document.querySelector('input[name="konten"]').value);

        // Menangani submit form
        document.querySelector('#formTambahBerita').addEventListener('submit', e => {
            e.preventDefault();

            // Ambil konten dari editor markdown dan set ke input hidden
            document.querySelector('input[name="konten"]').value = kontenEditor.getHTML();
            e.target.submit();
        });
    </script>
@endsection
