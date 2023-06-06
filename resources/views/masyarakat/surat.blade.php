@extends('masyarakat.master')

@section('title')
@endsection

@section('content')
    <div class="container ">
        <p>Bagi Warga kami yang mau mengurus surat pengantar KTP melalui Sistem ini
            Silahkan upload file Kartu Keluarga Anda.
        </p>
        <form action="{{ route('suratStore') }}" method="post">
            @csrf
            <div class="form-group mt-5">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" class="form-control" id="name" name="name" required
                    placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="kk">File KK:</label>
                <input type="file" class="form-control-file" id="kk" name="kk" required>
            </div>
            <input type="hidden" name="masyarakat_id" value="{{ Auth::guard('masyarakat')->user()->id }}">
            <button type="submit" class="btn btn-primary m-5">Submit</button>
        </form>
    </div>
@endsection
