@extends('structure.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
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
      <input class="form-control" name="photo" type="file" id="photo" value="{{ $structure->photo }}"><br>
      <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>
@endsection
