@extends('layout.app')
@section('title', 'Data Kategori')


@section('content')

    <div class="container">
        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary mb-3">Tambah Data</a>


        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil </strong>
                <p>{{ $message }}</p>
            </div>
        @endif


        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($kategori as $kat)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $kat->nama }}</td>
                            <td>
                                <a href="{{ route('admin.kategori.edit', $kat->id) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.kategori.destroy', $kat->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
