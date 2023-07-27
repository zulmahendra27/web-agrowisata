<?php include_once "./templates/header_single.php" ?>

<!-- Contact Start -->
<div class="container-xxl py-0" id="thankYou">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-6 text-center">
        <?php
        if (!isset($_GET['o'])) :
          echo "<script>alert('You don\'t have access to this page');</script>";
          echo "<script>window.location='?p=dashboard'</script>";
        else :
          $no_order = "#" . htmlspecialchars($_GET['o']);
          $where = "no_order='$no_order'";
          $queryTiket = select($c, 'tiket', ['where' => $where]);

          if ($queryTiket->num_rows > 0) :
            $dataTiket = mysqli_fetch_assoc($queryTiket);
        ?>
            <div class="h1 text-success mb-4">
              <i class="far fa-check-circle fa-6x"></i>
            </div>
            <div class="h4">
              <p>Terima kasih telah membeli tiket kunjungan ke Agrowisata <span class="text-primary">SENTRA JERUK
                  KERINCI</span></p>
              <p>Lakukan pembayaran tiket di petugas pintu masuk.<br>Berikut status order anda.</p>
            </div>
            <div class="card">
              <div class="card-body fw-bold">
                <div class="form-group mb-4">
                  <div class="h6">No. Order</div>
                  <div class="h5"><?= $dataTiket['no_order'] ?></div>
                </div>
                <div class="form-group mb-4">
                  <div class="h6">Status</div>
                  <?php
                  if ($dataTiket['status'] == 1) {
                    $status = "<span class='text-primary'>Sudah dibayar</span>";
                  } elseif ($dataTiket['status'] == 0) {
                    $status = "<span class='text-danger'>Belum dibayar</span>";
                  }
                  ?>
                  <div class="h4"><?= $status ?></div>
                </div>
                <hr>
                <div class="form-group mb-4">
                  <div class="h6">Nama</div>
                  <div class="h5"><?= $dataTiket['nama_pembeli'] ?></div>
                </div>
                <div class="form-group mb-4">
                  <div class="h6">No. HP</div>
                  <div class="h5"><?= $dataTiket['nohp_pembeli'] ?></div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-4 form-group mb-4">
                    <div class="h6">Jumlah Tiket</div>
                    <div class="h5"><?= $dataTiket['jumlah_tiket'] ?></div>
                  </div>
                  <div class="col-lg-4 form-group mb-4">
                    <div class="h6">Harga Satuan</div>
                    <div class="h5"><?= "Rp. " . number_format($dataTiket['harga_tiket'], 0, ",", ".") ?></div>
                  </div>
                  <div class="col-lg-4 form-group mb-4">
                    <div class="h6">Total Harga</div>
                    <div class="h5"><?= "Rp. " . number_format($dataTiket['harga_total'], 0, ",", ".") ?></div>
                  </div>
                </div>
              </div>
            </div>
          <?php else : ?>
            <div class="h1 text-danger mb-4">
              <i class="far fa-times-circle fa-6x"></i>
            </div>
            <div class="h4">
              <p>Nomor order yang anda masukkan tidak terdaftar. Silahkan melakukan pembelian tiket terlebih dahulu.</p>
            </div>
        <?php endif;
        endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->