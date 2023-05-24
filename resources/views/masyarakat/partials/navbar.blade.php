<div class="container-fluid bg-light position-relative shadow">
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
      <a
        href=""
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 25px; line-height: 20px;">
        <span class="text-primary">Sistem Informasi <br> Desa Pangombusan</span>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="" class="nav-item nav-link">Home</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown">Tentang Desa</a>
            <div class="dropdown-menu rounded-0 m-0">
              <a href="{{route('structure')}}" class="dropdown-item">Perangkat Desa</a>
              <a href="{{route('visimisi')}}" class="dropdown-item">Visi Misi</a>
              <a href="single.html" class="dropdown-item">Profil Desa</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              >Layanan</a
            >
            <div class="dropdown-menu rounded-0 m-0">
              <a href="surat.html" class="dropdown-item">Surat Permohonan Surat Tanah</a>
              </div>
          </div>
          <a href="team.html" class="nav-item nav-link">Saran</a>
          <a href="{{route('galery')}}" class="nav-item nav-link">Gallery</a>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
          <a href="{{route('pengumuman')}}" class="nav-item nav-link">Pengumuman</a>
        </div>
        </div>
    </nav>
  </div>
