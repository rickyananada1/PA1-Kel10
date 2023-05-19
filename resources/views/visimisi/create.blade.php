@extends('admin.master')

@section('title')
Form Visi Misi
@endsection

@section('content')

<div class="card">
  <div class="card-body">
  <form action="/VisiMisi" method="post" enctype="multipart/form-data">
    @csrf
    <label>Visi</label></br>
    <input type="text" name="visi" id="visi" class="form-control"></br>
    <label>Misi</label></br>
    <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"></textarea>
   <input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>
@endsection
