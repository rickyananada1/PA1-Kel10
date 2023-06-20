@extends('admin.master')

@section('title')
    Berita
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/berita" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <label>Judul</label><br>
                <input type="text" name="judul" id="judul" class="form-control"><br>
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Isi</label><br>
                <textarea name="isi" id="editor" class="form-control" style="height: 200px;"></textarea>
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <input class="form-control" name="image" type="file" id="image">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
