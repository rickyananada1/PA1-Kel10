@extends('admin.master')
@section('title')
    Pengumuman
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/pengumuman/{{ $pengumuman->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label>Judul</label><br>
                <input type="text" name="title" id="title" value="{{ $pengumuman->title }}" class="form-control"><br>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Isi</label><br>
                <input type="text" name="description" id="description" value="{{ $pengumuman->description }}" class="form-control"><br>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <button type="submit" class="btn btn-success my-3">Save</button>
            </form>
        </div>
    </div>
@endsection
