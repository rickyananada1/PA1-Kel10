@extends('admin.master')

@section('title')
    Saran
@endsection

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
@endpush

@section('content')

<div class="container">
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th style="width:25% ">Nama Lengkap</th>
                <th style="width:60% ">KK</th>
                <th>Verifikasi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($surat as $key => $item)
                <tr>
                    <td>{{ $item->masyarakat->name  }}</td>
                    <td>{{ $item->masyarakat->kk}}</td>
                    <td></td>
                </tr>
            @empty
            <tr>
                <td>Data Tidak Ada</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection
