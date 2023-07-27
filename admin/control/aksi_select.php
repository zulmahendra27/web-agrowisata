<?php
include_once 'connection.php';
include_once 'helper.php';

if (isset($_POST['laporan'])) {
  session_start();
  if ($_POST['laporan'] == 'penilaian_mapel') {
    $newData = array();
    $id_rombel = mysqli_escape_string($c, htmlspecialchars($_POST['id_rombel']));

    if ($_SESSION['level'] == 'guru') {
      $queryGuru = select($c, 'users a', ['join' => 'INNER JOIN guru b ON a.id_user=b.id_user', 'where' => "a.username='" . $_SESSION['username'] . "'"]);
      $dataGuru = mysqli_fetch_assoc($queryGuru);
      $where = "b.id_rombel=$id_rombel AND b.id_guru=" . $dataGuru['id_guru'];
    } else {
      $where = "b.id_rombel=$id_rombel";

      // $id_siswa = mysqli_escape_string($c, htmlspecialchars($_POST['id_siswa']));

      $querySiswa = select($c, 'siswa', ['where' => "id_rombel=$id_rombel"]);

      $arraySiswa = array();

      foreach ($querySiswa as $dataSiswa) {
        array_push($arraySiswa, $dataSiswa);
      }

      $newData['data_siswa'] = $arraySiswa;
    }

    $join = "INNER JOIN pengampu b ON a.id_mapel=b.id_mapel";
    $queryMapel = select($c, 'mapel a', ['where' => $where, 'join' => $join]);

    $array = array();

    foreach ($queryMapel as $data) {
      array_push($array, $data);
    }

    $newData['data_mapel'] = $array;

    echo json_encode($newData);
  } elseif ($_POST['laporan'] == 'penilaian_siswa') {
    $id_siswa = mysqli_escape_string($c, htmlspecialchars($_POST['id_siswa']));
    $opt = array(
      'where' => "a.id_siswa=$id_siswa"
    );

    echo json_encode(mysqli_fetch_assoc(select($c, 'penilaian a', $opt)));
  }
}
