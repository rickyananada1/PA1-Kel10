@extends('masyarakat.master')

@section('title')
@endsection
@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Gallery</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                @foreach ($galeri as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="portfolio-item">
                            <div class="position-relative overflow-hidden mb-2">
                                <img class="img-fluid portfolio-image" src="{{ asset('images/galery/' . $item->image) }}" />
                                <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('images/galery/' . $item->image) }}" data-lightbox="portfolio">
                                        <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="text-center">{{ $item->name }}<h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-right">
            <ul class="pagination">
                @if ($galeri->previousPageUrl())
                    <li class="page-item">
                        <a href="{{ $galeri->previousPageUrl() }}" class="page-link">Previous</a>
                    </li>
                @endif

                @if ($galeri->nextPageUrl())
                    <li class="page-item">
                        <a href="{{ $galeri->nextPageUrl() }}" class="page-link">Next</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <br>
@endsection
