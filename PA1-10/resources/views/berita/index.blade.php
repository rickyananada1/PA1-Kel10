@extends('admin.master')

@section('title')
    Berita
@endsection

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        @if (session('flash_message'))
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        @endif

        <a href="{{ url('/berita/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th style="width: 25%;">Image</th>
                    <th style="width: 20%;">Judul</th>
                    <th style="width: 40%;">Isi</th>
                    <th style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($news as $key => $item)
                    <tr>
                        <td><img src="{{ asset('images/berita/' . $item->image) }}" alt="..." height="50px" width="50px"></td>
                        <td>{{ $item->judul }}</td>
                        <td>{!! Illuminate\Support\Str::limit(strip_tags($item->isi), 30) !!}</td>
                        <td>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="/berita/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
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
