<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 35px; line-height: 20px;">
            <span class="text-primary">Desa Pangombusan</span>
        </a>
        <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="/masyarakat/dashboard" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tentang Desa</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('structure') }}" class="dropdown-item">Struktur Pemerintahan Desa</a>
                    <a href="{{ route('visimisi') }}" class="dropdown-item">Visi Misi</a>
                    <a href="{{route('profilDesa')}}" class="dropdown-item">Profil Desa</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('surat')}}" class="dropdown-item">Surat Permohonan Surat Tanah</a>
                </div>
            </div>
            <a href="{{ route('saran')}}" class="nav-item nav-link">Saran</a>
            <a href="{{ route('galery') }}" class="nav-item nav-link">Gallery</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            <div class="nav-item">
                <a href="{{ route('pengumuman') }}" class="nav-link">
                    Pengumuman
                    <span class="badge badge-primary ml-1">3</span>
                </a>
            </div>
        </div>

        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-link">
                <i class="fas fa-user-circle"></i>
            </a>
        </div>
    </nav>
</div>
