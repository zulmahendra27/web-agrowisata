<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent" id="nav-bar">
  <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
    <a href="?p=dashboard" class="navbar-brand d-flex align-items-center text-center">
      <div class="icon p-2 me-2">
        <img class="img-fluid" src="assets/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
      </div>
      <h1 class="m-0 text-primary h4">Sentra Jeruk Kerinci</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto">
        <a href="?p=dashboard" class="nav-item nav-link active">Home</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tiket</a>
          <div class="dropdown-menu rounded-0 m-0">
            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tiketModal">
              Beli Tiket
            </button>
            <a href="?p=cek_tiket" class="dropdown-item">Cek Tiket</a>
          </div>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Testimoni</a>
          <div class="dropdown-menu rounded-0 m-0">
            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#testimoniModal">
              Beri Testimoni
            </button>
            <a href="?p=semua_testimoni" class="dropdown-item">Semua Testimoni</a>
          </div>
        </div>
        <a href="?p=semua_galeri" class="nav-item nav-link">Galeri</a>
      </div>
    </div>
  </nav>
</div>
<!-- Navbar End -->