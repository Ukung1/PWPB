<?php
include 'lib/library.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['id_kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat     = $_POST['alamat'];
    $golongan   = $_POST['golongan'];
    $ibukandung = $_POST['ibukandung'];
    $file = $_POST['foto'];
    $foto = $_FILES['foto'];

    if (!empty($foto) and $foto['error'] == 0) {
      $path = './assets/images/';
      $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);

      if(!$upload){
        flash('error', "Upload file gagal");
        header('location:index.php');
      }
      $file = $foto['name'];
    }

    $sql = "UPDATE siswa SET
                nama = '$nama',
                gender = '$gender',
                id_kelas = '$kelas',
                jurusan = '$jurusan',
                alamat      = '$alamat',
                golongan    = '$golongan',
                ibukandung  = '$ibukandung', 
                file = '$file'
            WHERE nis = '$nis'";

    $mysqli->query($sql) or die($mysqli->error);
    header('location: index.php');
}
$sql = "SELECT *  FROM kelas";
$dataKelas =  $mysqli->query($sql) or die ($mysqli->error);
$nis = $_GET['nis'];
if (empty($nis)) header('location: index.php');
$sql = "SELECT * FROM siswa WHERE nis = '$nis'";
$query = $mysqli->query($sql);
$siswa = $query->fetch_array();
if (empty($siswa)) header('location: index.php');
include 'views/v_tambah.php';