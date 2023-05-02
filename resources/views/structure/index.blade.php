@extends('structure.layout')
@section('content')
    <div class="container">
        <a href="{{ url('/structure/create') }}" class="btn btn-success mb-3" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <div class="row">
            @foreach($structures as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($item->photo) }}" class="card-img-top" alt="..." height="250px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->address }}</p>
                        <p class="card-text">{{ $item->mobile }}</p>
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
            <i class="fa fa-plus" aria-hidden="true"></i> Kembali
        </a>
    </div>
@endsection
