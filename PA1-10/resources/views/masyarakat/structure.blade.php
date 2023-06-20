@extends('masyarakat.master')

@section('title')
@endsection

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Struktur Pemerintahan Desa</h3>

        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                @foreach ($structure as $item)
                    <div class="col-md-4 text-center team mb-5">
                        <div class="d-flex flex-column align-items-center">
                            <h5>{{ $item->jabatan }}</h5>
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%; width: 300px; height: 300px; margin: 0 auto;">
                                <img class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" src="{{ asset('images/structure/' . $item->image) }}" alt="" />
                            </div>
                            <div class="text-left">
                                <p><strong>Nama:</strong> {{ $item->name }}</p>
                                <p><strong>Alamat:</strong> {{$item->address}}</p>
                                <p><strong>Email:</strong> {{$item->email}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
