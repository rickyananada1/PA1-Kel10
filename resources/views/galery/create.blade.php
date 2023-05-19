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
                    <textarea class="form-control @error('name') is-invalid @enderror" name="name" id="name" rows="3">{{ old('name') }}</textarea>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input class="form-control-file @error('image') is-invalid @enderror" name="image" type="file" id="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
