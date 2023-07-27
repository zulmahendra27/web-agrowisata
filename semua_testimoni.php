<?php include_once "./templates/header_single.php" ?>

<!-- Contact Start -->
<div class="container-xxl py-0" id="testimoni">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h1 class="mb-3">Pengunjung Berkata!</h1>
    </div>

    <div class="row g-4 justify-content-center wow fadeInUp">
      <div class="col-lg-8">

        <?php
        $per_page = 5;

        // halaman aktif
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
        } else {
          $page = 1;
        }

        // hitung jumlah data
        $queryCount = select($c, 'testimoni', ['select' => "COUNT(*) AS total"]);
        // $query_count = mysqli_query($conn, "SELECT COUNT(*) AS total FROM testimoni");
        $dataCount = mysqli_fetch_assoc($queryCount);
        $total_data = $dataCount['total'];

        // hitung jumlah halaman
        $total_pages = ceil($total_data / $per_page);

        // hitung offset
        $offset = ($page - 1) * $per_page;

        // ambil data testimoni
        // $queryTestimoni = mysqli_query($conn, "SELECT * FROM testimoni LIMIT $offset, $per_page");
        $queryTestimoni = select($c, 'testimoni', ['limit' => "$offset, $per_page", 'order' => 'ORDER BY id_testimoni DESC']);

        if ($queryTestimoni->num_rows > 0) :
          foreach ($queryTestimoni as $testimoni) :

        ?>

            <!-- tampilkan data testimoni -->
            <div class="testimonial-item bg-light rounded p-3 mb-2">
              <div class="bg-white border rounded p-4">
                <div class="d-flex justify-content-between">
                  <div class="mb-2">
                    <h6 class="fw-bold mb-1"><?= $testimoni['nama_pengisi'] ?></h6>
                    <small><?= $testimoni['email_pengisi'] ?></small>
                  </div>
                  <div class="mb-2">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                      <i class="fas fa-fw fa-star <?= $i < $testimoni['bintang'] ? 'text-danger' : '' ?>"></i>
                    <?php endfor ?>
                  </div>
                </div>
                <p><?= truncateText($testimoni['isi_testimoni'], 150) ?></p>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- pagination -->

          <div class="mt-4 d-flex justify-content-center">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <?php if ($page > 1) : ?>
                  <li class="page-item">
                    <a class="page-link" href="?p=semua_testimoni&page=<?php echo $page - 1; ?>#testimoni" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                  <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                    <a class="page-link" href="?p=semua_testimoni&page=<?php echo $i; ?>#testimoni">
                      <?php echo $i; ?>
                    </a>
                  </li>
                <?php endfor; ?>

                <?php if ($page < $total_pages) : ?>
                  <li class="page-item">
                    <a class="page-link" href="?p=semua_testimoni&page=<?php echo $page + 1; ?>#testimoni" aria-label="Next">
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
<!-- Contact End -->