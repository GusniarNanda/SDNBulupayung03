@extends('layout.app')
@section('title', 'Edit Visi Misi')


@section('content')

    <div class="container">
        <a href="/admin/visimisi" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.visimisi.update') }}" method="POST" enctype="multipart/form-data" id="formEdit">
                    @csrf
                    <input type="text" name="visi" hidden value="{{ $visimisi->visi }}">
                    <input type="text" name="misi" hidden value="{{ $visimisi->misi }}">
                    <div class="form-group">
                        <label for="visieditor">Visi</label>
                        <div id="visieditor"></div>
                    </div>
                    @error('visi')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="misieditor">Misi</label>
                        <div id="misieditor"></div>
                    </div>
                    @error('misi')
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
        const visieditor = initEditor("#visieditor", document.querySelector('input[name="visi"]').value)
        const misieditor = initEditor("#misieditor", document.querySelector('input[name="misi"]').value)

        document.querySelector('#formEdit').addEventListener('submit', e => {
            e.preventDefault();

            document.querySelector('input[name="visi"]').value = visieditor.getHTML();
            document.querySelector('input[name="misi"]').value = misieditor.getHTML();
            e.target.submit();
        });
    </script>
@endsection
