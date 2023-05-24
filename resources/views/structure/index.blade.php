@extends('admin.master')

@section('title')
    Aparatur Desa
@endsection

@section('content')
    <div class="container">
        <a href="{{ url('/structure/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <div class="row">
            @foreach($structures as $item)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <h6>{{$item->jabatan}}</h6>
                    <br>
                    <img src="{{ asset('images/structure/'.$item->image) }}" class="card-img-top" alt="..." height="150px">
                    <div class="card-body">
                        <p class="card-title">Nama      : {{ $item->name }}</h1> <br>
                        <p class="card-text"> Alamat    :{{ $item->address }}</p>
                        <p class="card-text"> No Telepon:{{ $item->mobile }}</p>
                        <form action="{{ route('structure.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('structure.edit', $item->id) }}" class="btn btn-success">Edit</a>
                            <button class="btn btn-danger">Hapus</button>
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
