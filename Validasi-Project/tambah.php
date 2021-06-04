<?php
include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis        = @$_POST['nis'];
    $nama       = @$_POST['nama'];
    $gender     = @$_POST['gender'];
    $kelas      = @$_POST['id_kelas'];
    $jurusan    = @$_POST['jurusan'];
    $alamat     = @$_POST['alamat'];
    $golongan   = @$_POST['golongan'];
    $ibukandung = @$_POST['ibukandung'];
    $foto       = @$_FILES['foto'];
    $file       = $foto['name'];

    if (empty($nis)) {
        flash('error', 'Mohon Masukan NIS Dengan Benar');
    } else if (empty($nama)) {
        flash('error1', 'Mohon Masukan Nama Lengkap Dengan Benar');
    } else {
        if (!empty($foto) and $foto['error'] == 0) {
            $path = './assets/images/';
            $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);
        if (!$upload) {
            flash('error', "Gagal mengupload file!");
            header('location:index.php');
            }
            $file = $foto ['name'];
        }
    }
    
    $sql = "INSERT INTO siswa (nis,nama,gender,id_kelas,jurusan,alamat,golongan,ibukandung,file) 
            VALUES ('$nis','$nama','$gender','$id_kelas','$jurusan','$alamat','$golongan','$ibukandung','$file')";

    $mysqli->query($sql) or die($mysqli->error);

    header("location:index.php");
}
$success = flash('success');
$error = flash ('error');
$error1 = flash('error1');

$sql ="SELECT * FROM kelas";
$dataKelas = $mysqli->query($sql) or die($mysqli->error);
include 'views/v_tambah.php';
