@extends('masyarakat.master')

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Surat Pengantar KTP</h3>
        </div>
    </div>
    <div class="container mt-5">
        <div>
            <p style="font-size: 18px; font-weight: bold;color:black">Layanan ini digunakan untuk membuat surat Pengantar KTP bagi warga Desa Pangombusan</p>
            <a href="{{ route('surat.all') }}" class="btn btn-success" style="border-radius: 0;">
                <i class="fas fa-envelope"></i> Request Surat
            </a>
        </div>
        @if (Auth::guard('masyarakat')->check())
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Status Permohonan</th>
                        <th>Nama Pemohon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $item)
                        @if ($item->masyarakat_id == Auth::guard('masyarakat')->user()->id)
                            <tr
                                style="background-color: {{ $item->status == 2 ? '#f8d7da' : ($item->status == 1 ? '#d4f1da' : 'inherit') }}">
                                <td>
                                    @if ($item->status == 1)
                                        Disetujui
                                    @elseif ($item->status == 2)
                                        Ditolak
                                    @else
                                        Menunggu
                                    @endif
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <a href="{{ url('masyarakat/cetakSurat', ['id' => $item->id]) }}" target="_blank"><i
                                                class="fas fa-print">Cetak</i></a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endif



        <div class="mt-5">
            <h4>Syarat-syarat Mengurus KTP:</h4>
            <ul>
                <li>Warga yang ingin melakukan request surat merupakan warga Desa Pangombusan</li>
                <li>Sudah berusia minimal 17 tahun pada hari request</li>
                <li>Tidak sedang di luar Kota</li>
            </ul>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-XXXXX" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-XXXXX"
        crossorigin="anonymous"></script>

@endsection
