@extends('admin.master')

@section('title')
    Visi Misi
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('VisiMisi.create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:35% ">Visi</th>
                    <th style="width:50% ">Misi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($visimisi as $key => $item)
                    <tr>
                        <td>{{ $item->visi }}</td>
                        <td>{{ $item->misi }}</td>
                        <td>
                            <form action="VisiMisi/{{$item->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="VisiMisi/{{$item->id}}/edit" class="btn btn-success">Edit</a>
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
