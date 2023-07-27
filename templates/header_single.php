<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-6 p-5 mt-lg-5">
      <h1 class="display-5 animated fadeIn mb-4"><?= ucwords($title) ?></h1>
      <nav aria-label="breadcrumb animated fadeIn">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="?p=dashboard">Home</a></li>
          <li class="breadcrumb-item text-body active" aria-current="page"><?= ucwords($title) ?></li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 animated fadeIn">
      <?php
      $queryHeader = select($c, 'galeri', ['limit' => 1, 'order' => 'ORDER BY id_galeri DESC']);
      $image = mysqli_fetch_assoc($queryHeader);
      ?>
      <img class="img-fluid img-fit" width="100%" src="images/<?= $image['foto'] ?>" alt="<?= $image['foto'] ?>">
    </div>
  </div>
</div>
<!-- Header End -->


<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
</div>
<!-- Search End -->