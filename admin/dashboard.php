<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800"><?= $title ?></h1>


<div class="row">
  <?php
  $countTiket = mysqli_fetch_assoc(select($c, 'tiket', ['select' => "COUNT(*) as totalTiket"]));
  $countTestimoni = mysqli_fetch_assoc(select($c, 'testimoni', ['select' => "COUNT(*) as totalTestimoni"]));
  $countGaleri = mysqli_fetch_assoc(select($c, 'galeri', ['select' => "COUNT(*) as totalGaleri"]));
  ?>
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Total Pembelian Tiket</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countTiket['totalTiket'] ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Total Testimoni</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countTestimoni['totalTestimoni'] ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-star fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Total Galeri</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countGaleri['totalGaleri'] ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-images fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>