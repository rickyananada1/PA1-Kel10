@extends('masyarakat.master')

@section('title')
@endsection

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Saran</h5>
                <h5 class="text-white">Mari membangun desa dengan memberikan saran yang membangun</p>
        </div>
    </div>

    <div class="container">

        @foreach ($saran as $item)
        @endforeach
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil: </strong> {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cloes">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h3>Form Saran</h3>
        <form action="{{ route('saranStore') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="saran">Saran:</label>
                <textarea class="form-control" name="saran" id="saran" rows="5" placeholder="Masukkan saran Anda"></textarea>
            </div>
            <input type="hidden" name="masyarakat_id" value="{{ Auth::guard('masyarakat')->user()->id }}">
            <button type="submit" class="btn btn-primary m-5">Kirim</button>
        </form>
    </div>
@endsection
