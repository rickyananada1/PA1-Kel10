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
            @error('saran')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="hidden" name="masyarakat_id" value="{{ Auth::guard('masyarakat')->user()->id }}">
            <button type="submit" class="btn btn-primary mt-2 mb-3">Kirim</button>
        </form>

        @if ($saran->count() < 1)
            <h3 hidden>Saran Sebelumnya</h3>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 85%">Saran</th>
                    <th style="width: 15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($saran as $item)
                <tr>
                    <td>{{ $item->saran }}</td>
                    <td>
                        <form action="{{ route('saranDelete', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('saranEdite', $item->id) }}" class="btn btn-success">Edit</a>
                            <button class="btn btn-danger btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif

    </div>
@endsection
