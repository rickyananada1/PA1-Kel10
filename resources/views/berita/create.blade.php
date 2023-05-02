@extends('berita.layout')
@section('content')

<div class="card">
  <div class="card-header"><h3>Buat Berita Baru</h3></div>
  <div class="card-body">
  <form action="{{ url('berita') }}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <label>Judul</label></br>
    <input type="text" name="judul" id="judul" class="form-control"></br>
    <label>Isi</label></br>
    <textarea name="isi" id="isi" class="form-control"></textarea></br>
    <input class="form-control" name="image" type="file" id="image">


    <input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>
@endsection
