@extends('layout.app')

@section('content')
    <h1>Daftar Berita</h1>
    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $berita)
                <tr>
                    <td>
                        <a href="{{ route('admin.berita.show', $berita->id) }}">
                            {{ $berita->judul }}
                        </a>
                    </td>
                    <td>{{ Str::limit($berita->konten, 50) }}</td>
                    <td>
                        @if ($berita->gambar)
                            <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar Berita"
                                style="width: 100px;">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.beritaedit', ['berita' => $berita->id]) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
