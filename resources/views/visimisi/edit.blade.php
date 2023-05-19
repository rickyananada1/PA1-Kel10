@extends('admin.master')
@section('title')
    Visimisi
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/VisiMisi/{{ $visimisi->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label>Visi</label><br>
                <input type="text" name="visi" id="visi" value="{{ $visimisi->visi }}" class="form-control"><br>
                @error('visi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Misi</label><br>
                <input type="text" name="misi" id="misi" value="{{ $visimisi->misi }}" class="form-control"><br>
                @error('misi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <button type="submit" class="btn btn-success my-3">Save</button>
            </form>
        </div>
    </div>
@endsection
