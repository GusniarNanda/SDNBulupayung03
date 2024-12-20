@extends('layout.app')
@section('title', 'Data Service')


@section('content')

    <div class="container">
        <a href="/services" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul">
                    </div>
                    @Error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                    </div>
                    @Error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @Error('image')
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
