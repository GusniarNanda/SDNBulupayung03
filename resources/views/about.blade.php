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

                <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="{{ $about->judul }}">
                    </div>
                    @Error('judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Subjudul</label>
                        <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="subjudul"> {{ $about->subjudul }}</textarea>
                    </div>
                    @Error('subjudul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">Deskripsi 1</label>
                        <textarea name="deskripsi_1" id="" cols="30" rows="10" class="form-control"
                            placeholder="deskripsi_1"> {{ $about->deskripsi_1 }}</textarea>
                    </div>
                    @Error('deskripsi_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 2</label>
                        <textarea name="deskripsi_2" id="" cols="30" rows="10" class="form-control"
                            placeholder="deskripsi_2"> {{ $about->deskripsi_2 }}</textarea>
                    </div>
                    @Error('deskripsi_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    {{-- kelebihan 1 --}}
                    <div class="form-group">
                        <label for="">Kelebihan 1</label>
                        <input type="text" class="form-control" name="kelebihan_1" placeholder="kelebihan_1"
                            value="{{ $about->kelebihan_1 }}">
                    </div>
                    @Error('kelebihan_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">Kelebihan 2</label>
                        <input type="text" class="form-control" name="kelebihan_2" placeholder="kelebihan_2"
                            value="{{ $about->kelebihan_2 }}">
                    </div>
                    @Error('kelebihan_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">Kelebihan 3</label>
                        <input type="text" class="form-control" name="kelebihan_3" placeholder="kelebihan_3"
                            value="{{ $about->kelebihan_3 }}">
                    </div>
                    @Error('kelebihan_3')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">Kelebihan 4</label>
                        <input type="text" class="form-control" name="kelebihan_4" placeholder="kelebihan_4"
                            value="{{ $about->kelebihan_4 }}">
                    </div>
                    @Error('kelebihan_4')
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
