@extends('layout.app')
@section('title', 'Data Kategori')


@section('content')

    <div class="container">
        <a href="{{ route('admin.kategori.index') }}" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.kategori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama">
                    </div>
                    @Error('nama')
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
