@extends('admin.master')

@section('title')
 Data Masyarakat
@endsection
@section('content')
<div class="container">
    <table class="table">
        <tbody>
            <tr>
                <th>Nama:</th>
                <td>{{$surat->name}}</td>
            </tr>
            <tr>
                <th>Tempat/Tanggal Lahir:</th>
                <td>{{$surat->tempatlahir}} / {{$surat->tgllahir}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin:</th>
                <td>{{$surat->jeniskelamin}}</td>
            </tr>
            <tr>
                <th>Pekerjaan:</th>
                <td>{{$surat->pekerjaan}}</td>
            </tr>
            <tr>
                <th>Agama:</th>
                <td>{{$surat->agama}}</td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td>{{$surat->alamat}}</td>
            </tr>
            <tr>
                <th>File KK:</th>
                <td><a href="{{ asset('FileKK/' . $surat->kk) }}">{{$surat->kk}}</a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
