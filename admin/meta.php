<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 font-weight-bold"><?= $title ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
  </div>
  <div class="card-body">
    <form action="./control/aksi_insert.php" method="post">
      <?php
      $queryMeta = select($c, 'meta');
      if ($queryMeta->num_rows > 0) :
        foreach ($queryMeta as $dataMeta) :
      ?>
          <div class="form-group row">
            <label for="<?= $dataMeta['kunci'] ?>" class="col-sm-2 col-form-label"><?= ucwords(implode(' ', explode('_', $dataMeta['kunci']))) ?></label>
            <div class="col-sm-10">
              <?php if ($dataMeta['kunci'] == 'deskripsi') : ?>
                <textarea name="<?= $dataMeta['kunci'] ?>" id="<?= $dataMeta['kunci'] ?>" class="form-control" cols="30" rows="7"><?= $dataMeta['value'] ?></textarea>
              <?php else : ?>
                <input type="text" value="<?= $dataMeta['value'] ?>" name="<?= $dataMeta['kunci'] ?>" class="form-control" id="<?= $dataMeta['kunci'] ?>">
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="form-group row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" name="update_meta" class="btn btn-success">Update</button>
          </div>
        </div>
      <?php endif; ?>
    </form>
  </div>

</div>