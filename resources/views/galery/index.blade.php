@extends('admin.master')

@section('title')
Galery
@endsection

@section('content')
    <div class="container">
        <a href="{{ url('/galery/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galery as $item)
                    <tr>
                        <td><img src="{{ asset('images/galery/'. $item->image) }}" alt="..." height="150px"></td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{ route('galery.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('galery.edit', $item->id) }}" class="btn btn-success">Edit</a>
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
