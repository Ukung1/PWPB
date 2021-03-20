<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Vito PWPB</title>
    <link rel="stylesheet" type="text/css" href="assets/css.css">
</head>
<body>
    <h1 id="grad1">Vito Ardika Saputra= Tabel Daftar Siswa</h1>
    <b><a href = "tambah.php" id="grad1"><h3><img width="15" src="assets/images/adddata.png">Tambah Data</a> | <a href="logout.php" id="grad1"><img width="15" src="assets/images/logoutimage.png"> Logout</h3></a></b>
    <form method="GET" action="index.php" class="cariii">Cari Berdasarkan NIS dan Nama
    <input type="text" name="search" value="<?= @$search ?>">
    <button type="submit">Search</button></form><br>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr style="background-color:#293F68;">
            <th style=scope="col">No.</th>
            <th  scope="col">Foto
                <a href="index.php?sort=nis&order=asc">↿</a>
                <a href="index.php?sort=nis&order=desc">⇂</a>
            <th scope="col">Nis
                <a href="index.php?sort=nis&order=asc">↿</a>
                <a href="index.php?sort=nis&order=desc">⇂</a>
            </th>
            <th scope="col">Nama              
                <a href="index.php?sort=nama&order=asc">↿</a>
                <a href="index.php?sort=nama&order=desc">⇂</a>
            </t>
            <th scope="col">Jenis Kelamin
                <a href="index.php?sort=gender&order=asc">↿</a>
                <a href="index.php?sort=gender&order=desc">⇂</a>
            </th>
            <th scope="col">Kelas
                <a href="index.php?sort=kelas&order=asc">↿</a>
                <a href="index.php?sort=kelas&order=desc">⇂</a>
            </th>
            <th scope="col">Jurusan
                <a href="index.php?sort=jurusan&order=asc">↿</a>
                <a href="index.php?sort=jurusan&order=desc">⇂</a>
            </th>
            <th scope="col">Alamat
                <a href="index.php?sort=alamat&order=asc">↿</a>
                <a href="index.php?sort=alamat&order=desc">⇂</a>
            </th>
            <th scope="col">Gol Darah
                <a href="index.php?sort=golongan&order=asc">↿</a>
                <a href="index.php?sort=golongan&order=desc">⇂</a>
            </th>
            <th scope="col">Nama Ibu
                <a href="index.php?sort=ibu&order=asc">↿</a>
                <a href="index.php?sort=ibu&order=desc">⇂</a>
            </th>
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
            <td  style="background-color:#8C819A;">
                <?php if (!empty($siswa['$file'])) { ?>
                <img width="30px"height="30px" src="<?php echo base_url() ?>/assets/images/
                <?php echo $siswa['file'] ?>"alt="">
                <?php } else { ?> 
                <img width="30" height="30" src="assets/images/userimg.png">
                <?php } ?>
            </td>
            <td style="background-color:#8C819A;"><?= $siswa ['nis']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['nama']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['gender']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['kelas']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['jurusan']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['alamat']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['golongan']; ?></td>
            <td style="background-color:#8C819A;"><?= $siswa ['ibukandung']; ?></td>
            <td style="background-color:#8C819A;">
                <center><a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-primary"><img width="15" src="assets/images/editimage.png"> Edit</a> | 
                <a href="delete.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')"><img width="15" scr="assets/images/deleteimage.png">Delete</a></td>
                </center>
            </tr>
    <?php } ?>
    </tbody>
</table> 
<br>
       
</body> 
</html>