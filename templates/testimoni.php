<!-- Testimonial Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h1 class="mb-3">Testimoni</h1>
      <p>Terima kasih atas testimoni yang anda berikan. Masukan anda sangat berguna untuk kemajuan Agrowisata Sentra
        Jeruk Kerinci.</p>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <?php
      $queryTestimoni = select($c, 'testimoni', ['limit' => 5, 'order' => 'ORDER BY id_testimoni DESC']);
      if ($queryTestimoni->num_rows > 0) :
        foreach ($queryTestimoni as $testimoni) :
      ?>
          <div class="d-flex testimonial-item bg-light rounded p-3">
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
      <?php endforeach;
      endif; ?>
    </div>
  </div>
  <div class="col-12 text-center mt-4 wow fadeInUp" data-wow-delay="0.1s">
    <a class="btn btn-primary py-3 px-5" href="?p=semua_testimoni">Cek Semua Testimoni</a>
  </div>
</div>
<!-- Testimonial End -->