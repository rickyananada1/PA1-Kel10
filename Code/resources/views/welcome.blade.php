@extends('masyarakat.master')

@section('content')
    <div class="container-fluid p-0" style="position: relative;">
        <img class="man" src="{{ '/frontend/img/desa12.jpg' }}" alt=""
            style="height: 100vh; width:100%; object-fit: cover;">
        <h1 style="position: absolute; top: 20px; left: 20px; color: #fff;">Selamat Datang
            @if (Auth::guard('masyarakat')->check())
            {{ Auth::guard('masyarakat')->user()->name }}</h1>
            @endif
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Berita</span>
                </p>
                <div class="text-right mb-3">
                    <a href="{{ route('semuaBerita') }}" class="btn btn-primary">
                        Lihat Semua Berita
                    </a>
                </div>
                <h1 class="mb-4">Berita Terbaru</h1>
            </div>
            <div class="row pb-3">

                @foreach ($news as $item)
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm mb-2 card-hover">
                            <div class="card-body p-0">
                                <img class="card-img-top" src="{{ asset('images/berita/' . $item->image) }}" alt=""
                                    style="object-fit: cover; height: 200px;">
                                <div class="card-body bg-light p-4">
                                    <h6 class="card-title">{!! Str::limit($item->judul, 60) !!}</h6>
                                    <p class="card-text">{!! Str::limit($item->isi, 100) !!}</p>
                                    <p class="card-text" style="font-size: 12px; color: #555;">{{ $item->created_at }}</p>
                                    <a href="{{ route('beritadetail', $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i> Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
