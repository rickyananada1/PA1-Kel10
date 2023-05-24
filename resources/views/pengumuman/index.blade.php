@extends('admin.master')

@section('title')
    Pengumuman
@endsection

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
@endpush

@section('content')
    <div class="container">
        <a href="{{ url('/pengumuman/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered" id="myTable">
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
                        <td>{!! Illuminate\Support\Str::limit(strip_tags($item->description), 30) !!}</td>
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


