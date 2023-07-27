<?php
include_once '../admin/control/connection.php';
include_once 'helper.php';
session_start();

if (isset($_POST["button_testimoni"])) {
  $nama = mysqli_escape_string($c, htmlspecialchars($_POST['nama_pengisi']));
  $email = mysqli_escape_string($c, htmlspecialchars($_POST['email_pengisi']));
  $testimoni = mysqli_escape_string($c, htmlspecialchars($_POST['testimoni']));
  $bintang = mysqli_escape_string($c, htmlspecialchars($_POST['star']));

  $data = array(
    'uid_testimoni' => uniqid() . time(),
    'nama_pengisi' => $nama,
    'email_pengisi' => $email,
    'bintang' => $bintang,
    'isi_testimoni' => $testimoni
  );

  $query = insert($c, $data, 'testimoni');

  if ($query) {
    $_SESSION['alert'] = alert('Terima kasih telah memberikan testimoni. Semoga Agrowisata UD. SENTRA JERUK KERINCI semakin maju.', 'success');
    header("Location: ../main.php?p=dashboard");
  }
} elseif (isset($_POST["button_tiket"])) {
  $no_order = mysqli_escape_string($c, htmlspecialchars($_POST['no_order']));
  $nama_pembeli = mysqli_escape_string($c, htmlspecialchars($_POST['nama_pembeli']));
  $nohp_pembeli = mysqli_escape_string($c, htmlspecialchars($_POST['nohp_pembeli']));
  $harga_tiket = mysqli_escape_string($c, htmlspecialchars($_POST['harga_tiket']));
  $jumlah_tiket = mysqli_escape_string($c, htmlspecialchars($_POST['jumlah_tiket']));
  $harga_total = mysqli_escape_string($c, htmlspecialchars($_POST['harga_total']));

  $data = array(
    'no_order' => $no_order,
    'nama_pembeli' => $nama_pembeli,
    'nohp_pembeli' => $nohp_pembeli,
    'harga_tiket' => $harga_tiket,
    'jumlah_tiket' => $jumlah_tiket,
    'harga_total' => $harga_total,
    'status' => 0
  );

  $query = insert($c, $data, 'tiket');

  if ($query) {
    $_SESSION['alert'] = alert('Terima kasih telah membeli tiket. Silahkan melakukan pembayaran di pintu masuk dengan menunjukkan bukti order tiket.', 'success');
    header("Location: ../main.php?p=tiket&o=" . substr($no_order, 1) . "#thankYou");
  }
}
