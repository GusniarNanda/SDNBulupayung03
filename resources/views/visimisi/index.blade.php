@extends('layout.app')
@section('title', 'Data Visi Misi')

@section('content')

    <div class="container">
        <h1 class="mt-4 mb-4">Visi dan Misi</h1>

        <!-- Tombol Edit -->
        <a href="/admin/visimisi/edit" class="btn btn-primary mb-3">Edit Visi dan Misi</a>

        <!-- Pesan Sukses -->
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil!</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Tabel Visi dan Misi -->
        <div class="card">
            <div class="card-header">Data Visi dan Misi</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Visi</th>
                            <th>Misi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! $visimisi->visi !!}</td>
                            <td>{!! $visimisi->misi !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
