@php
    $formattedId = str_pad($data->id, 3, '0', STR_PAD_LEFT);
    $tahun = date('Y', strtotime($data->created_at));
    setlocale(LC_TIME, 'id_ID');
@endphp

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
    .table-no-border,
    .table-no-border td,
    .table-no-border th {
        border: none !important;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h5 class="text-center mb-2">PEMERINTAHAN DESA PANGOMBUSAN</h5>
            <h6 class="text-center mb-1">Kec : Parmaksian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kab : Toba</h6>
            <h1 class="text-center mb-1">
                <hr style="border-top: 1px solid black; margin-bottom: 3px;">
                <hr style="border-top: 3px solid black; margin-top: 3px;">
            </h1>
            <h5 class="text-center" style="text-decoration: underline;">Surat Pengantar KTP</h5>
            <h6 class="text-center">No: {{$formattedId}}/ DS-PKS / {{$tahun}}</h6>

            <p>Kepada Yth,</p>

            <p>Kepala Dinas Kependudukan dan Pencatatan Sipil</p>
            <p>Kabupaten Toba</p>

            <p>Dengan hormat,</p>

            <p>Yang bertanda tangan di bawah ini Kepala Desa Pangombusan, Kecamatan Parmaksian, Kabupaten Toba dengan ini menerangkan bahwa :</p>
            <table class="table table-no-border">
                <tbody>
                    <tr class="table-row">
                        <td>Nama</td>
                        <td class="separator">:</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr class="table-row">
                        <td>Jenis Kelamin</td>
                        <td class="separator">:</td>
                        <td>{{ $data->jeniskelamin }}</td>
                    </tr>
                    <tr class="table-row">
                        <td>Tempat / Tanggal Lahir</td>
                        <td class="separator">:</td>
                        <td>{{ $data->tempatlahir }} / {{ date('d F Y', strtotime($data->tgllahir)) }}</td>
                    </td>
                    </tr>
                    <tr class="table-row">
                        <td>Alamat</td>
                        <td class="separator">:</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr class="table-row">
                        <td>Pekerjaan</td>
                        <td class="separator">:</td>
                        <td>{{ $data->pekerjaan }}</td>
                    </tr>
                    <tr class="table-row">
                        <td>Agama</td>
                        <td class="separator">:</td>
                        <td>{{ $data->agama }}</td>
                    </tr>
                </tbody>
            </table>


            <p>Orang tersebut adalah benar-benar warga Desa Pangombusan, Kecamatan Parmaksian, Kabupaten Toba. Surat pengantar ini dibuat sebagai kelengkapan KTP (Kartu Tanda Penduduk).</p>
            <p>Demikian permohonan ini saya sampaikan. Atas perhatian dan bantuan yang diberikan, saya ucapkan terima kasih.</p>

            <p class="text-right">Pagombusan, {{ $data->updated_at->locale('id')->translatedFormat('d F Y') }}</p>
            <p class="text-right">Kepala Desa</p>
            <p class="text-right mt-5">Hardi Manurung</p>
        </div>
    </div>
</div>
