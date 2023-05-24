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
    <textarea name="description" id="summernote" class="form-control" cols="30" rows="10"></textarea>
    @error('isi')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>
@endsection

@section('scripts')

<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      placeholder: 'Masukkan Deskripsi',
      tabsize: 2,
      height: 200
    });
  });
</script>
@endsection
