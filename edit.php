<?php

include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $golongan = $_POST['golongan'];
    $ibukandung = $_POST['ibukandung'];

    $sql = "UPDATE siswa SET
                nama = '$nama',
                gender = '$gender',
                kelas = '$kelas',
                jurusan = '$jurusan',
                alamat = '$alamat',
                golongan = '$golongan',
                ibukandung = '$ibukandung'
            WHERE nis = $nis;
            ";

    $mysqli->query($sql) or die($mysqli->error);

    header('location: index.php');
}

$nis = $_GET['nis'];

if (empty($nis)) header('location: index.php');

$sql = "SELECT * FROM siswa WHERE nis = '$nis'";
$query = $mysqli->query($sql);
$siswa = $query->fetch_array();

if (empty($siswa)) header('location: index.php');

include 'views/v_tambah.php';