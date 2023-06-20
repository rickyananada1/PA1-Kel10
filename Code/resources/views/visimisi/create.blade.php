@extends('admin.master')

@section('title')
Form Visi Misi
@endsection

@section('content')

<div class="card">
  <div class="card-body">
    <form action="/VisiMisi" method="post" enctype="multipart/form-data">
      @csrf
      <label>Visi</label><br>
      <input type="text" name="visi" id="visi" class="form-control"><br>
      <label>Misi</label><br>
      <textarea name="misi" id="editor" class="form-control" style="height: 200px;"></textarea>
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

