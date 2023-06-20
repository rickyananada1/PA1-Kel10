@extends('masyarakat.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">{{ $beritadetail->judul }}</h4>
                    <p class="card-text" style="font-size: 12px; color: #555;">{{ $beritadetail->created_at }}</p>
                    <img class="img-fluid mb-3" src="{{ asset('images/berita/' . $beritadetail->image) }}" alt=""  width="100%" height="380px"/>
                    <br> <br>
                    {!! $beritadetail->isi !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Berita Lainnya</h4>
                    @foreach($berita->sortByDesc('created_at')->take(10) as $category)
                    @if($category->id !== $beritadetail->id)
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <a href="{{ route('beritadetail', $category->id) }}"><img src="{{ asset('images/berita/' . $category->image) }}" alt="img" class="fh5co_most_trading zoom-img" style="width: 100%; height: 60px; object-fit: cover;"></a>
                        </div>
                        <div class="col-7 paddding">
                            <a href="{{ route('beritadetail', $category->id) }}" class="card-link"><div class="most_fh5co_treding_font" style="font-size: 14px;">{!! Str::limit($category->judul, 50) !!}</div></a>
                            <div class="most_fh5co_treding_font_123" style="font-size: 12px;">{{$category->created_at->locale('id')->format('d F Y')}}</div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
