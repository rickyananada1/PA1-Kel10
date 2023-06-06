@extends('masyarakat.master')

@section('content')

<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Kontak Desa</h3>
        <div class="d-inline-flex text-white">
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-4 text-center">
            <a href="#" onclick="openEmail('citranainggolan21')">
                <i class="fa fa-envelope fa-3x custom-icon"></i>
            </a>
            <p class="mt-2">Email: email@example.com</p>
        </div>
        <div class="col-4 text-center">
            <i class="fa fa-phone fa-3x custom-icon"></i>
            <p class="mt-2">Telepon: 1234567890</p>
        </div>
        <div class="col-4 text-center">
            <i class="fa fa-map-marker fa-3x custom-icon"></i>
            <p class="mt-2">Alamat: Alamat Desa</p>
        </div>
    </div>
</div>


<script>
    function openEmail(username) {
        var email = username + "@gmail.com";
        var url = "https://mail.google.com/mail/u/0/?view=cm&fs=1&to=" + email;
        window.open(url, "_blank");
    }
</script>

<style>
    .custom-icon {
        color: rgb(71, 69, 69);
    }
</style>

@endsection
