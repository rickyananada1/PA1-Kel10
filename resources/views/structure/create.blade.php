@extends('admin.master')

@section('title')
Struktur Pemerintahan
@endsection

@section('content')
<div class="card">
  <div class="card-body">

      <form action="/structure" method="post" enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        @error('address')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Telepon</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        @error('mobile')
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
