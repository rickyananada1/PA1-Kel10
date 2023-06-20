<div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-md-4 mb-5">
            <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                style="font-size: 40px; line-height: 40px">
                <span class="text-white">Pangombusan</span>
            </a>
            <p>
                Pangombusan adalah salah satu desa di Kecamatan Parmaksian,
                Kabupaten Toba, Provinsi Sumatra Utara, Indonesia.
                Desa Pangombusan merupakan ibu kota dan pusat
                pemerintahan Kecamatan Parmaksian.
            </p>
        </div>
        <div class="col-md-4 mb-5">
            <h3 class="text-primary mb-4">Jam Kerja</h3>
            <div class="d-flex">
                <div class="pl-3">
                    <h6 class="text-white">Bekerja 6 Hari Seminngu, Kecuali Hari Libur</h5>
                        Senin - Kamis 08.00-16.00 <br>
                        Jumat 08.00-15.00 <br>
                        Sabtu 08.00-12.00
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="/masyarakat/dashboard"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="{{ route('suratIndex') }}"><i
                        class="fa fa-angle-right mr-2"></i>Request Surat Pengantar KTP</a>
                <a class="text-white mb-2" href="{{ route('saran') }}"><i class="fa fa-angle-right mr-2"></i>Mau Kasih
                    Saran?</a>
                <a class="text-white mb-2" href="{{ route('galery') }}"><i class="fa fa-angle-right mr-2"></i>Galery</a>
                <a class="text-white mb-2" href="{{ route('contact') }}"><i
                        class="fa fa-angle-right mr-2"></i>Contact</a>
                <a class="text-white" href="{{ route('pengumuman') }}"><i
                        class="fa fa-angle-right mr-2"></i>Pengumuman</a>
                @if (Auth::guard('masyarakat')->check())
                    <a class="text-white" href="{{ url('masyarakat/logout') }}"><i
                            class="fa fa-angle-right mr-2"></i>logout</a>
                @endif
            </div>
        </div>
    </div>
</div>
