<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 35px; line-height: 20px;">
            <h1>Desa Pangombusan</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav font-weight-bold ml-auto">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tentang Desa</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('structure') }}" class="dropdown-item">Struktur Pemerintahan Desa</a>
                        <a href="{{ route('visimisi') }}" class="dropdown-item">Visi Misi</a>
                        <a href="{{route('profilDesa')}}" class="dropdown-item">Profil Desa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{route('suratIndex')}}" class="dropdown-item">Surat Pengantar Pembuatan KTP</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('saran')}}" class="nav-link">Saran</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galery') }}" class="nav-link">Galeri</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengumuman') }}" class="nav-link">Pengumuman</a>
                </li>

                @if (Auth::guard('masyarakat')->check())
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{url('masyarakat/logout')}}" class="dropdown-item">logout</a>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">Login</a>
                </li>
                @endif

            </ul>
        </div>
    </nav>
</div>
