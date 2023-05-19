@extends('admin.master')

@section('title')
    Pengumuman
@endsection

@section('content')
    <div class="container">
        <a href="{{ url('/pengumuman/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:25% ">Judul</th>
                    <th style="width:60% ">Isi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengumuman as $key => $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="/pengumuman/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td>Data Tidak Ada</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('index') }}" class="btn btn-success mb-3" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Kembali
        </a>
    </div>
@endsection
