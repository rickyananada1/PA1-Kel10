@extends('berita.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    <form action="{{ url('berita', $berita->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <label>Judul</label><br>
      <input type="text" name="judul" id="judul" value="{{ $berita->judul }}" class="form-control"><br>
      <label>Isi</label><br>
      <input type="text" name="isi" id="aisi" value="{{ $berita->isi }}" class="form-control"><br>
      <label>Gambar</label><br>
      <input class="form-control" name="image" type="file" id="image" value="{{ $berita->image}}"><br>
      <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>
@endsection
