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

                <form action="/admin/contact/{{$contact->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="name" placeholder="Judul"
                            value="{{ $contact->name }}">
                    </div>
                    @Error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">
                            {{ $contact->description }}
                        </textarea>
                    </div>
                    @Error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                            value="{{ $contact->alamat }}">
                    </div>
                    @Error('alamat')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email"
                            value="{{ $contact->email }}">
                    </div>
                    @Error('email')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon"
                            value="{{ $contact->telepon }}">
                    </div>
                    @Error('telepon')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Maps Embed</label>
                        <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed">
                            {{ $contact->maps_embed }}
                        </textarea>
                    </div>
                    @Error('maps_embed')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $contact->logo }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="logo">
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
