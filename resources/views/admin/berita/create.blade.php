@extends('layout.app')
@section('title', 'Data Kontak')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>Berhasil </strong>
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <form action="/admin/berita/" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="{{ old('judul') }}">
                    </div>
                    @Error('judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="konten" id="" cols="30" rows="10" class="form-control"
                            placeholder="konten"> {{ old('konten') }}</textarea>
                    </div>
                    @Error('konten')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    @Error('gambar')
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
