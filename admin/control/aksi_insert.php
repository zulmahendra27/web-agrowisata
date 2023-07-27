<?php
include_once 'connection.php';
include_once 'helper.php';
session_start();

if (isset($_POST["upload_galeri"])) {

  //memeriksa apakah ada file yang diunggah
  if (count($_FILES["foto"]["name"]) > 0) {

    //perulangan untuk mengunggah setiap file
    for ($i = 0; $i < count($_FILES["foto"]["name"]); $i++) {

      //mengambil nama file
      $filename = 'galeri-' . time() . mt_rand(1000, 9999);

      //menentukan direktori file yang akan diunggah
      $target_dir = "images/";

      //menentukan path file yang akan diupload
      $target_file = "../../" . $target_dir . basename($filename);

      //memeriksa apakah file sudah ada atau belum
      if (file_exists($target_file)) {
        continue;
      } else {
        //mengunggah file
        if (move_uploaded_file($_FILES["foto"]["tmp_name"][$i], $target_file)) {

          //menyimpan nama file ke dalam database
          $data = ['foto' => $filename];
          $query = insert($c, $data, 'galeri');
        } else {
          continue;
        }
      }
    }

    if ($query) {
      $_SESSION['alert'] = alert('Data berhasil disimpan', 'success');
      header("Location: ../main.php?p=galeri");
    }
  }
} elseif (isset($_POST["update_meta"])) {
  $queryMeta = select($c, 'meta');
  if ($queryMeta->num_rows > 0) {
    foreach ($queryMeta as $meta) {
      $value = mysqli_escape_string($c, htmlspecialchars($_POST[$meta['kunci']]));

      if ($meta['value'] != $value) {
        $query = update($c, ["value" => $value], 'meta', "kunci='" . $meta['kunci'] . "'");
        // var_dump($query);
        // die;
      }
    }

    if ($query) {
      $_SESSION['alert'] = alert('Data berhasil disimpan', 'success');
      header("Location: ../main.php?p=meta");
    }
  }
}

if (isset($_GET["approve"])) {
  $no_order = '#' . mysqli_escape_string($c, htmlspecialchars($_GET['no_order']));

  $data = ['status' => 1];
  $query = update($c, $data, 'tiket', "no_order='$no_order'");

  if ($query) {
    $_SESSION['alert'] = alert('Data berhasil disimpan', 'success');
    header("Location: ../main.php?p=tiket");
  }
}