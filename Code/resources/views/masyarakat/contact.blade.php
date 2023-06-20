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
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14227.824948005691!2d99.17246667684739!3d2.4540115681118557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ff8462933c51%3A0xe36d56a85a817f7d!2sKantor%20Desa%20Pangombusan!5e0!3m2!1sid!2sid!4v1686556712075!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>
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
