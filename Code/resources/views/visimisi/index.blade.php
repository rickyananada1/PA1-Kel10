@extends('admin.master')

@section('title')
    Visi Misi
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
                        <td>{!! Illuminate\Support\Str::limit(strip_tags($item->misi), 30) !!}</td>
                        <td>
                            <form action="{{ route('visimisi.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="/VisiMisi/{{$item->id}}/edit" class="btn btn-success">Edit</a>
                                <button class="btn btn-danger btn-delete">Hapus</button>
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

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('.btn-delete').on('click', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');
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
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
