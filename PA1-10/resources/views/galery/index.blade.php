@extends('admin.master')

@section('title')
    Galery
@endsection

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        // SweetAlert untuk konfirmasi penghapusan
        $('form').on('submit', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                }
            });
        });
    </script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
@endpush

@section('content')
    <div class="container">
        @if (session('succes'))
            <div class="alert alert-success">
                {{ session('succes') }}
            </div>
        @endif
        <a href="{{ url('/galery/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama Gambar</th>
                    <th>Tanggal Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galery as $item)
                    <tr>
                        <td><img src="{{ asset('images/galery/'. $item->image) }}" alt="..." height="150px"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->updated_at}}</td>
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
