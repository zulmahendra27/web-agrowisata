<?php include_once "./templates/header_single.php" ?>

<!-- Contact Start -->
<div class="container-xxl py-0" id="thankYou">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-6 text-center">
        <div class="h4">
          <p>Silahkan cek tiket anda dengan memasukkan <span class="text-primary">Nomor Order</span> atau <span class="text-primary">Nomor Handphone</span> yang anda input saat membeli tiket.</p>
        </div>
        <form action="" method="post">
          <div class="form-group mb-4">
            <input type="text" name="no_order" id="no_order" class="form-control form-control-lg" placeholder="Masukkan No. Order atau No. HP">
          </div>
          <div class="form-group mb-4">
            <button type="submit" name="cek_tiket" class="btn btn-success col-12">Cek Tiket</button>
          </div>
        </form>
        <?php
        if (isset($_POST['cek_tiket'])) :
          $no_order = mysqli_escape_string($c, htmlspecialchars($_POST['no_order']));
          $whereCekTiket = "no_order='$no_order' OR nohp_pembeli='$no_order'";
          $queryCekTiket = select($c, 'tiket', ['where' => $whereCekTiket]);
          if ($queryCekTiket->num_rows > 0) :
            $dataTiket = mysqli_fetch_assoc($queryCekTiket);
        ?>
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