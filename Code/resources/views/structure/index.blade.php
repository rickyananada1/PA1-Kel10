@extends('admin.master')

@section('title')
    Aparatur Desa
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ url('/structure/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <div class="row">
            @foreach($structures as $item)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <h6>{{$item->jabatan}}</h6>
                    <br>
                    <img src="{{ asset('images/structure/'.$item->image) }}" class="card-img-top" alt="..." height="200px">
                    <div class="card-body">
                        <p class="card-text mt-1">Nama      : {{ $item->name }}</h1> <br>
                        <p class="card-text mt-1"> Alamat    :{{ $item->address }}</p>
                        <p class="card-text mt-1"> Email     :{{ $item->email }}</p>
                        <form action="{{ route('structure.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('structure.edit', $item->id) }}" class="btn btn-success">Edit</a>
                            <button class="btn btn-danger btn-delete">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('index') }}" class="btn btn-success mb-3" title="Back">
            <i aria-hidden="true"></i> Kembali
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
