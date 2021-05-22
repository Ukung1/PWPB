<!DOCTYPE html>
<html>
<head>
    <title>Vito PWPB</title>
    <link rel="stylesheet" type="text/css" href="assets/css.css">
</head>
<body>
    <?php $action = 'tambah.php'; if (!empty($siswa)) $action = 'edit.php'?>
    <form method="POST" action="<?= $action ?>" class="formz "enctype="multipart/form-data">
        <b id="grad1">Tambah data/Edit</b>
        <label for="">Foto</label><br>
            <?php if ($action == "edit.php") { ?>
            <img width="100" height="110" src="<?php echo base_url(); ?>/assets/images/<?php echo $siswa['file']; ?>" id="output">
            <input type="file" name="foto" value="<?php echo $siswa['file'] ?>">
            <?php } else { ?>
            <img src="assets/images/userimg.png"  id="output" style="width:70px; height:70px;">
            <input type="file" name="foto" autocomplete="off" onchange="loadFile(event)" >
            <?php } ?>
        <div>
            <div >
                <span>Nis</span>
            </div>
            <input type="text" placeholder="Masukkan Nomor Induk Siswa" name="nis" value="<?= @$siswa['nis'] ?>" required>
        </div>
        <div>
            <div>
                <span>Nama Lengkap</span>
            </div>
            <input type="text" placeholder="Masukan Nama Lengkap Siswa" name="nama" value="<?= @$siswa['nama'] ?>" required>
        </div>
        <div>
            <label>
            <span>Jenis kelamin :</span><br>
            <input type="radio" name="gender" value="L" <?= @$siswa['gender'] == 'L' ? 'checked' : '' ?> required> Laki-laki
            </label>
            <label>
                <input type="radio" name="gender" value="P" <?= @$siswa['gender'] == 'P' ? 'checked' : '' ?>> Perempuan
            </label>
        </div>
        <div>

            <div>
                <label>Kelas</label>
            </div>
            
            <select name="id_kelas" id="">
                <option value="">[Pilih Kelas]</option>
                <?php while ($murid = @$dataKelas->fetch_array()) { ?> 
                <option value="<?php echo $murid['id_kelas'] ?>" <?php echo @$siswa['id_kelas'] == $murid['id_kelas'] ? 'selected' : '' ?>>
                    <?php echo $murid['nama_kelas'] ?>
                </option> 
                <?php } ?>
            </select>
        </div>
        <div>
            <div>
                <span>Jurusan</span>
            </div>
                <input type="text" placeholder="Masukkan Jurusan anda" name="jurusan" value="<?= @$siswa['jurusan']; ?>" required>
        </div>
        <div>
            <div>
                <span>Alamat</span>
            </div>
            <input type="text" placeholder="Masukkan Alamat Rumah" name="alamat" value="<?= @$siswa['alamat'] ?>" required>
        </div>
        <div>
            <div>
                <label>Golongan Darah</label>
            </div>
            <select name="golongan" required>
                <option value="A" <?= @$siswa['golongan'] == 'A' ? 'selected' : '' ?>>A</option>
                <option value="B" <?= @$siswa['golongan'] == 'B' ? 'selected' : '' ?>>B</option>
                <option value="AB" <?= @$siswa['golongan'] == 'AB' ? 'selected' : '' ?>>AB</option>
                <option value="O" <?= @$siswa['golongan'] == 'O' ? 'selected' : '' ?>>O</option>
            </select>
        </div>
        <div>
            <div>
                <span>Nama Ibu kandung</span>
            </div>
                <input type="text" placeholder="Masukkan Nama Ibu Kandung anda" name="ibukandung" value="<?= @$siswa['ibukandung']; ?>" required>
        </div>
           
        <button type="submit" value="Simpan">Simpan</button>
    </form><br>
    <a href="index.php">Kembali ke data</a>
    <script>
        const del = document.querySelector(".del");
        const overwrite = document.createElement("input");
        const inp = document.querySelector(".inp");
        if (del.value != '') {
            del.setAttribute("type", "hidden");
            overwrite.setAttribute("type", "text");
            overwrite.setAttribute("class", "form-control");
            overwrite.setAttribute("value", "<?= $siswa["nis"]; ?>");
            overwrite.setAttribute("disabled", "");
            inp.appendChild(overwrite);
        }
    </script>
</body>
</html>
