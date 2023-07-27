<?php include_once "./templates/header.php" ?>

<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
</div>
<!-- Search End -->

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="about-img position-relative overflow-hidden p-5 pe-0">
          <img class="img-fluid w-100" src="images/sentra-jeruk-kerinci.jpg">
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h1>Agrowisata</h1>
        <h1 class="text-primary mb-4">Sentra Jeruk Kerinci</h1>
        <p class="mb-4"><?= array_key_exists('deskripsi', $meta) ? $meta['deskripsi'] : '' ?></p>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<?php include_once "./templates/galeri.php" ?>

<?php include_once "./templates/testimoni.php" ?>