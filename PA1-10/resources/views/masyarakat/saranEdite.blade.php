@extends('masyarakat.master')

@section('content')
<div class="container">
    <a href="/masyarakat/saran" class="btn btn-info btn-sm">Kembali</a>
<h3>Form Saran</h3>
<form action="{{ route('saranUpdate', ['id' => $saran->id]) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="saran">Saran:</label>
        <textarea class="form-control" name="saran" id="saran" rows="5">{{$saran->saran}}</textarea>
    </div>
    <input type="hidden" name="masyarakat_id" value="{{ Auth::guard('masyarakat')->user()->id }}">
    <button type="submit" class="btn btn-primary mt-2 mb-3">Kirim</button>
</form>
</div>
@endsection
