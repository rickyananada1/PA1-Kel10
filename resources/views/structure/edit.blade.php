@extends('structure.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('structure') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{ $structure->name }} class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{ $structure->address }} class="form-control"></br>
        <label>Telepon</label></br>
        <input type="text" name="mobile" id="mobile" value="{{ $structure->mobile }} class="form-control"></br>
        <input class="form-control" name="photo" value="{{ $structure->photo}} type="file" id="photo">

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection
