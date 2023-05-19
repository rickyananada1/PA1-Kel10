@extends('admin.master')
@section('title')
    Berita
@endsection

@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            <form action="/berita/{{ $news->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label>Judul</label><br>
                <input type="text" name="judul" id="judul" value="{{ $news->judul }}" class="form-control"><br>
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Isi</label><br>
                <input type="text" name="isi" id="isi" value="{{ $news->isi }}" class="form-control"><br>
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Gambar</label><br>
                <input type="file" id="image" name="image" class="form-control"><br>
                <a href="{{ asset('images/' . $news->image) }}" class="btn btn-info btn-sm" target="_blank">Lihat Gambar</a>
                <br>
                <button type="submit" class="btn btn-success my-3">Save</button>
            </form>
        </div>
    </div>
@endsection
