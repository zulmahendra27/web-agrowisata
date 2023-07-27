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
            <th>No. Order</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>Jumlah Tiket</th>
            <th>Total Harga</th>
            <th>Tanggal Pembelian</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $query = select($c, 'tiket', ['order' => "ORDER BY id_tiket DESC"]);
          foreach ($query as $data) :
          ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $data['no_order'] ?></td>
            <td><?= $data['nama_pembeli'] ?></td>
            <td><?= $data['nohp_pembeli'] ?></td>
            <td><?= $data['jumlah_tiket'] ?></td>
            <td><?= $data['harga_total'] ?></td>
            <td><?= date('d-m-Y H:i', strtotime($data['tanggal_beli'])) ?></td>
            <td>
              <?php if ($data['status'] == 0) : ?>
              <a href="#" class="badge badge-success border-0" data-toggle="modal" data-target="#approveModal"
                onclick="approveTiket('<?= substr($data['no_order'], 1) ?>')">approve</a>
              <?php elseif ($data['status'] == 1) : ?>
              <div class="badge badge-secondary">approved</div>
              <?php endif; ?>
            </td>
          </tr>
          <?php $i++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
function approveTiket(no_order) {
  let noOrder = document.getElementById('noOrder');
  let buttonApprove = document.getElementById('buttonApprove');

  noOrder.innerText = '#' + no_order;
  buttonApprove.setAttribute('href', './control/aksi_insert.php?approve=tiket&no_order=' + no_order);
}
</script>