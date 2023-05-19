@extends('admin.master')

@section('title')
Pengumuman
@endsection

@section('content')

<div class="card">
  <div class="card-body">
  <form action="/pengumuman" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <label>Judul</label></br>
    <input type="text" name="title" id="title" class="form-control"></br>
    @error('title')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <label>Isi</label></br>
    {{-- <textarea name="isi" id="isi" width="10" cols="30" class="form-control"></textarea></br> --}}
    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
    @error('isi')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>
@endsection
