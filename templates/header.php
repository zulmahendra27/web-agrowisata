<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-6 p-5 mt-lg-5">
      <h1 class="display-5 animated fadeIn mb-4">Agrowisata<br><span class="text-primary">Sentra Jeruk Kerinci</span>
      </h1>
      <p class="animated fadeIn mb-4 pb-2">Liburan ke Agrowisata Sentra Jeruk Kerinci dapat menjadi alternatif yang
        menyenangkan dan bermanfaat bagi keluarga yang ingin mendapatkan kegiatan liburan yang berbeda dan mendapatkan
        pengalaman yang berkesan.</p>
      <button type="button" class="btn btn-primary py-3 px-5 me-3 animated fadeIn" data-bs-toggle="modal" data-bs-target="#tiketModal">
        Beli Tiket
      </button>
    </div>
    <div class="col-md-6 animated fadeIn">
      <div class="owl-carousel header-carousel">
        <?php
        $queryHeader = select($c, 'galeri', ['limit' => 5, 'order' => 'ORDER BY id_galeri DESC']);
        foreach ($queryHeader as $header) :
        ?>
          <div class="owl-carousel-item">
            <img class="img-fluid" src="images/<?= $header['foto'] ?>" alt="<?= $header['foto'] ?>">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<!-- Header End -->