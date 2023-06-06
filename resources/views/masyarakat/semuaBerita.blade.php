@extends('masyarakat.master')

@section('content')
    <div class="container">
        @foreach ($news as $item)
            <div class="col-lg-12 mb-4">
                <div class="card border-0 shadow-sm mb-2 card-hover">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <a href="{{ route('beritadetail', $item->id) }}" style="text-decoration: none;">
                                <img class="card-img" src="{{ asset('images/berita/' . $item->image) }}" alt=""
                                    style="object-fit: cover; width: 200px; height: 150px;">
                            </a>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body bg-light p-4">
                                <a href="{{ route('beritadetail', $item->id) }}"
                                    style="text-decoration: none; color: #000;">
                                    <h6 class="card-title mb-2">{{ $item->judul }}</h6>
                                </a>
                                <p class="card-text mb-3" style="margin-top: -10px;">{{ Str::limit($item->isi, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('beritadetail', $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i> Baca Selengkapnya
                                    </a>
                                    <p class="text-muted" style="font-size: 12px;">{{ $item->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
