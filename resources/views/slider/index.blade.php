@extends('layout.app')
@section('title', 'Data Slider')


@section('content')

    <div class="container">
        <a href="/admin/sliders/create" class="btn btn-primary mb-3">Tambah Data</a>


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
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($slider as $slider)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td>
                                <img src="{{ Storage::url('images/' . $slider->image) }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST">
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
