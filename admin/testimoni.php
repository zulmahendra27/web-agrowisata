<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 font-weight-bold"><?= $title ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered small" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi Testimoni</th>
            <th>Bintang</th>
            <th>Tanggal Pengisian</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $query = select($c, 'testimoni', ['order' => "ORDER BY id_testimoni DESC"]);
          foreach ($query as $data) :
          ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $data['nama_pengisi'] ?></td>
              <td><?= $data['email_pengisi'] ?></td>
              <td><?= $data['isi_testimoni'] ?></td>
              <td class="text-grey" style="white-space: nowrap;">
                <?php for ($j = 0; $j < 5; $j++) : ?>
                  <i class="fas fa-fw fa-star <?= $j < $data['bintang'] ? 'text-danger' : '' ?>"></i>
                <?php endfor ?>
              </td>
              <td><?= date('d-m-Y H:i', strtotime($data['created_at'])) ?></td>
            </tr>
          <?php $i++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>