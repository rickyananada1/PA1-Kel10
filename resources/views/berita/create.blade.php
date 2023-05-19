@extends('admin.master')

@section('title')
Berita
@endsection

@section('content')

<div class="card">
  <div class="card-body">
  <form action="/berita" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <label>Judul</label></br>
    <input type="text" name="judul" id="judul" class="form-control"></br>
    @error('judul')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <label>Isi</label></br>
    {{-- <textarea name="isi" id="isi" width="10" cols="30" class="form-control"></textarea></br> --}}
    <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
    @error('isi')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <input class="form-control" name="image" type="file" id="image">
    @error('image')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>
@endsection
