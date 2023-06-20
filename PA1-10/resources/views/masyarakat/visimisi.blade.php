@extends('masyarakat.master')

@section('title')
@endsection

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Visi Misi</h3>
        </div>
    </div>

    @foreach ($visimisi as $item)
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Visi</h3>
                    <p>{{$item->visi}}</p>
                </div>
                <div class="col-md-6">
                    <h3>Misi</h3>
                    <ul>{!!$item->misi!!}</ul>
                </div>
            </div>
        </div>
    @endforeach
@endsection
