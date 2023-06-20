@extends('admin.master')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/galery" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Gambar</label>
                    <textarea class="form-control @error('name') is-invalid @enderror" name="name" id="name" required rows="3">{{ old('name') }}</textarea>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input class="form-control" name="image" type="file" id="image">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
