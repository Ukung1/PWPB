<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Vito PWPB</title>
    <link rel="stylesheet" type="text/css" href="assets/css.css">

</head>
<body id="bg" >
    <h1 id="grad1">Vito Ardika Saputra= Tabel Daftar Siswa</h1>
    <a href = "tambah.php">Tambah Data</a><br><br>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr style="background-color:#293F68;">
            <th style=scope="col">No.</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Golongan Darah</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">Control</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i =1;
            while ($siswa = $listSiswa->fetch_array()) { 
        ?>
        <tr>
            <th style="background-color:#435278;" scope="row"><?= $i++; ?></th>
            <td style="background-color:#8C819A;"><?= $siswa ['nis']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['nama']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['gender']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['kelas']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['jurusan']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['alamat']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['golongan']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['ibukandung']; ?></td>
            <td style="background-color:#8C819A;">
                <a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-primary">Edit</a>
                <a href="delete.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table> 
<br>
    <a href="logout.php" id="grad1" style="background-color: white;">Logout</a>    
</body> 
</html>