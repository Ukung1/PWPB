<?php
include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $gender     = $_POST['gender'];
    $kelas      = $_POST['kelas'];
    $jurusan    = $_POST['jurusan'];
    $alamat     = $_POST['alamat'];
    $golongan   = $_POST['golongan'];
    $ibukandung = $_POST['ibukandung'];
    $foto       = @$_FILES['foto'];
    $file       = $foto['name'];

    $sql = "INSERT INTO siswa (nis,nama,gender,kelas,jurusan,alamat,golongan,ibukandung,file) 
            VALUES ('$nis','$nama','$gender','$kelas','$jurusan','$alamat','$golongan','$ibukandung','$file')";

    if (!empty($foto) and $foto['error'] == 0) {
        $path = './assets/images/';
        $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);
    if (!$upload) {
        flash('error', "Gagal mengupload file!");
        header('location:index.php');
        }
        $file = $foto ['name'];
    }
    
    $sql = "INSERT INTO siswa (nis,nama,gender,kelas,jurusan,alamat,golongan,ibukandung,file) 
            VALUES ('$nis','$nama','$gender','$kelas','$jurusan','$alamat','$golongan','$ibukandung','$file')";

    $mysqli->query($sql) or die($mysqli->error);

    header("location:index.php");
}
include 'views/v_tambah.php';
