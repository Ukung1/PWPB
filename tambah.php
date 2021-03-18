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

    $sql = "INSERT INTO siswa (nis,nama,gender,kelas,jurusan,alamat,golongan,ibukandung) VALUES ('$nis','$nama','$gender','$kelas','$jurusan','$alamat','$golongan','$ibukandung')";

    $mysqli->query($sql) or die($mysqli->error);

    header("location:index.php");
}

include 'views/v_tambah.php';
