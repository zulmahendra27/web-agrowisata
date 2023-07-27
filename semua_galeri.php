<?php include_once "./templates/header_single.php" ?>

<!-- Contact Start -->
<div class="container-xxl py-0" id="galeri">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h1 class="mb-3"><?= ucwords($title) ?></h1>
    </div>

    <div class="tab-content">
      <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">

          <?php
          $per_page = 5;

          // halaman aktif
          if (isset($_GET['page'])) {
            $page = $_GET['page'];
          } else {
            $page = 1;
          }

          // hitung jumlah data
          $queryCount = select($c, 'galeri', ['select' => "COUNT(*) AS total"]);
          // $query_count = mysqli_query($conn, "SELECT COUNT(*) AS total FROM galeri");
          $dataCount = mysqli_fetch_assoc($queryCount);
          $total_data = $dataCount['total'];

          // hitung jumlah halaman
          $total_pages = ceil($total_data / $per_page);

          // hitung offset
          $offset = ($page - 1) * $per_page;

          // ambil data galeri
          // $queryGaleri = mysqli_query($conn, "SELECT * FROM galeri LIMIT $offset, $per_page");
          $queryGaleri = select($c, 'galeri', ['limit' => "$offset, $per_page", 'order' => 'ORDER BY id_galeri DESC']);

          if ($queryGaleri->num_rows > 0) :
            foreach ($queryGaleri as $galeri) :

          ?>
              <!-- tampilkan data galeri -->
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden" style="height: 240px;">
                    <!-- <div class="align-self-stretch"> -->
                    <img class="img-fluid w-100 h-100" style="object-fit: cover; object-position: center;" src="images/<?= $galeri['foto'] ?>" alt="<?= $galeri['foto'] ?>">
                    <!-- </div> -->
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

            <!-- pagination -->

            <div class="mt-4 d-flex justify-content-center">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <?php if ($page > 1) : ?>
                    <li class="page-item">
                      <a class="page-link" href="?p=semua_galeri&page=<?php echo $page - 1; ?>#galeri" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                      <a class="page-link" href="?p=semua_galeri&page=<?php echo $i; ?>#galeri">
                        <?php echo $i; ?>
                      </a>
                    </li>
                  <?php endfor; ?>

                  <?php if ($page < $total_pages) : ?>
                    <li class="page-item">
                      <a class="page-link" href="?p=semua_galeri&page=<?php echo $page + 1; ?>#galeri" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  <?php endif; ?>
                </ul>
              </nav>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->