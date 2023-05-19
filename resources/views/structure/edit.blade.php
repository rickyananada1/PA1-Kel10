@extends('admin.master')

@section('title')
Struktur Pemerintahan
@endsection

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ url('structure', $structure->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <label>Name</label><br>
      <input type="text" name="name" id="name" value="{{ $structure->name }}" class="form-control"><br>
      <label>Address</label><br>
      <input type="text" name="address" id="address" value="{{ $structure->address }}" class="form-control"><br>
      <label>Telepon</label><br>
      <input type="text" name="mobile" id="mobile" value="{{ $structure->mobile }}" class="form-control"><br>
      <label>Photo</label><br>
      <input class="form-control" name="image" type="file" id="image"><br>
      <a href="{{ asset('images/structure/' . $structure->image) }}" class="btn btn-info btn-sm" target="_blank">Lihat Gambar</a>
      <br>
      <input type="submit" value="Save" class="btn btn-success my-3"><br>
    </form>
  </div>
</div>
@endsection
