@extends('layout.app')
@section('title', 'Data Kontak')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>Berhasil</strong>
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                            value="{{ $contact->alamat }}">
                        @error('alamat')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            value="{{ $contact->email }}">
                        @error('email')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon"
                            value="{{ $contact->telepon }}">
                        @error('telepon')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="maps_embed">Maps Embed</label>
                        <textarea name="maps_embed" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{ $contact->maps_embed }}</textarea>
                        @error('maps_embed')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_telepon">Link WhatsApp</label>
                        <input type="url" class="form-control" name="link_telepon" placeholder="https://wa.me/123456789"
                            value="{{ $contact->link_telepon }}">
                        @error('link_telepon')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_email">Link Email</label>
                        <input type="url" class="form-control" name="link_email" placeholder="mailto:example@domain.com"
                            value="{{ $contact->link_email }}">
                        @error('link_email')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
