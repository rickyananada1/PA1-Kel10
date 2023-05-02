@extends('structure.layout')
@section('content')
    <div class="container">
        <a href="{{ url('/berita/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 25%;">Image</th>
                    <th style="width: 20%;">Judul</th>
                    <th style="width: 40%;">Isi</th>
                    <th style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berita as $item)
                    <tr>
                        <td><img src="{{ asset($item->image) }}" alt="..." height="150px"></td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->isi }}</td>
                        <td>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('index') }}" class="btn btn-success mb-3" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Kembali
        </a>
    </div>
@endsection
