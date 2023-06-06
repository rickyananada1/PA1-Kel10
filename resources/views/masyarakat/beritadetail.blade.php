@extends('masyarakat.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">{{ $beritadetail->judul }}</h4>
                    <p class="card-text" style="font-size: 12px; color: #555;">{{ $beritadetail->created_at }}</p>
                    <img class="img-fluid mb-3" src="{{ asset('images/berita/' . $beritadetail->image) }}" alt=""  width="full" height="380px"/>
                    <br> <br>
                    {{ $beritadetail->isi }}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Berita Lainnya</h4>
                    <hr>
                    <div class="mb-3">
                        <img class="img-thumbnail float-left mr-3" src="{{ asset('images/berita/' . $beritadetail->image) }}" style="width: 90px; height: 100px;" alt="" />
                        <a href="">{{ $beritadetail->judul }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
