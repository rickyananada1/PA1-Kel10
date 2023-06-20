@extends('masyarakat.master')

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val().toLowerCase();
                $('.card').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(query) > -1)
                });
            });

            $('.card-title a').click(function() {
                $(this).find('.card-title').toggleClass('hovered');
                return false;
            });
        });
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-lg-12">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" id="search" name="query" class="form-control" placeholder="Cari berita...">
                        <div class="input-group-append">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @foreach ($news as $item)
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <div class="card-image-container">
                                    <img src="{{ asset('images/berita/' . $item->image) }}" class="card-img img-fluid"
                                        alt="Berita Image" height="150px">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <a href="{{ route('beritadetail', $item->id) }}" style="text-decoration: none;">
                                        <h6 class="card-title" style="font-size: 18px; margin-bottom: 5px;">
                                            {!! $item->judul !!}</h6>
                                    </a>
                                    <p class="card-text" style="font-size: 16px; margin-bottom: 10px;">
                                        {!! Str::limit($item->isi, 200) !!}</p>
                                    <p class="card-text" style="font-size: 14px; color: #888;">{{ $item->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-left">
            <ul class="pagination">
                @if ($news->previousPageUrl())
                    <li class="page-item">
                        <a href="{{ $news->previousPageUrl() }}" class="page-link">Previous</a>
                    </li>
                @endif

                @if ($news->nextPageUrl())
                    <li class="page-item">
                        <a href="{{ $news->nextPageUrl() }}" class="page-link">Next</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <style>
        .card-image-container {
            display: flex;
            align-items: center;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-title.hovered {
            color: red;
        }

        @media (max-width: 576px) {
            .card-img {
                width: 100%;
                height: auto;
            }
        }
    </style>

@endsection
