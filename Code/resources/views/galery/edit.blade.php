@extends('admin.master')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/galery/{{$galery->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label>Nama Gambar</label><br>
                <textarea name="name" id="name" class="form-control">{{ $galery->name }}</textarea><br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Gambar</label><br>
                <input type="file" id="image" name="image" class="form-control"><br>
                <a href="{{ asset('images/galery/' . $galery->image) }}" class="btn btn-info btn-sm" target="_blank">Lihat Gambar</a>
                <br>
                <button type="submit" class="btn btn-success my-3" >Save</button>
            </form>
        </div>
    </div>
@endsection
