<!-- Modal Start -->
<div class="modal fade input-for-blur" id="testimoniModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="testimoniModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="background-color:#d7f4ec;">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="testimoniModalLabel">Beri Testimoni</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="./control/aksi_insert.php">
        <div class="modal-body form-rating">
          <div class="rating">
            <input type="radio" name="star" id="star5" value="5" checked><label for="star5"></label>
            <input type="radio" name="star" id="star4" value="4"><label for="star4"></label>
            <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
            <input type="radio" name="star" id="star2" value="2"><label for="star2"></label>
            <input type="radio" name="star" id="star1" value="1"><label for="star1"></label>
          </div>
          <div class="row mt-3" id="modalTestimoniRow">
            <div class="col-lg-6 form-group mb-4">
              <label for="nama_pengisi">Nama</label>
              <input type="text" name="nama_pengisi" id="nama_pengisi" required class="form-control form-control-sm border-danger input-for-blur">
            </div>
            <div class="col-lg-6 form-group mb-4">
              <label for="email_pengisi">Email</label>
              <input type="email" name="email_pengisi" id="email_pengisi" required class="form-control form-control-sm border-danger input-for-blur">
            </div>
            <div class="col-lg-12 form-group mb-4">
              <label for="testimoni">Testimoni</label>
              <textarea name="testimoni" id="testimoni" required class="form-control form-control-sm border-danger input-for-blur" rows="2"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="button_testimoni" class="btn btn-primary">Beri Testimoni</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="modal fade input-for-blur" id="tiketModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tiketModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="background-color:#d7f4ec;">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="tiketModalLabel">Form Pembelian Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="./control/aksi_insert.php">
        <div class="modal-body">
          <?php $no_order = strtoupper("#TKT-" . date('YmdHis') . "-" . uniqid() . mt_rand(1000, 9999)) ?>
          <div class="text-center fw-bold text-dark h5 mb-4">
            <p class="mb-2">No.Order</p>
            <div class="fw-bold h4"><?= $no_order ?></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <input type="hidden" name="no_order" value="<?= $no_order ?>">
                <input type="hidden" name="harga_tiket" id="harga_tiket" value="<?= array_key_exists('harga_tiket', $meta) ? $meta['harga_tiket'] : '' ?>">
                <input type="hidden" name="harga_total" id="harga_total" value="<?= array_key_exists('harga_tiket', $meta) ? $meta['harga_tiket'] : '' ?>">
                <div class="mb-3">
                  <label for="nama_pembeli" class="form-label">Nama</label>
                  <input type="text" name="nama_pembeli" class="form-control input-for-blur" id="nama_pembeli" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="mb-3">
                  <label for="nohp" class="form-label">No. HP</label>
                  <input type="number" name="nohp_pembeli" class="form-control input-for-blur" id="nohp" placeholder="Masukkan No. HP Anda" required>
                </div>
                <div class="mb-3">
                  <label for="jumlah-tiket" class="form-label">Jumlah Tiket</label>
                  <input type="number" min="1" value="1" name="jumlah_tiket" class="form-control input-for-blur" id="jumlah_tiket" placeholder="Masukkan jumlah tiket yang ingin dibeli" required>
                </div>
              </div>
              <div class="col-lg-6 text-center text-dark">
                <div class="harga-satuan">
                  <p class="h5">Harga Tiket per Satuan</p>
                  <p class="h4">
                    <?= array_key_exists('harga_tiket', $meta) ? ("Rp. " . number_format($meta['harga_tiket'], 0, ',', '.')) : '' ?>
                  </p>
                </div>
                <div class="harga-total mt-5">
                  <p class="h5">Total Harga</p>
                  <p class="h4" id="view_total">
                    <?= array_key_exists('harga_tiket', $meta) ? ("Rp. " . number_format($meta['harga_tiket'], 0, ',', '.')) : '' ?>
                  </p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="button_tiket" class="btn btn-primary">Beli Tiket</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Modal End -->