<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Vito PWPB</title>
    <link rel="stylesheet" type="text/css" href="assets/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container flex flex-col pt-14">
        <div class="flex flex-col flex-shrink-0 justify-center items-center">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="pb-4">
                        <h1>Vito Ardika Saputra= Tabel Daftar Siswa</h1>
                        <div class="pt-2">
                            <a class="pr-3" href="tambah.php" id="grad1"><i class="bi bi-file-earmark-plus"></i>Tambah Data</a>
                            <a href="logout.php" id="grad1"><i class="bi bi-door-open-fill"></i>Logout</a>
                        </div>
                        <form method="GET" action="index.php">
                            <div class="relative mx-auto text-gray-600 pt-3">
                                <input class="border-2 border-gray-300 bg-white h-10 w-50 px-4 pr-16 rounded-lg text-sm focus:outline-none" placeholder="Search by Name or NIS" type="text" name="search" value="<?= @$search ?>">
                                <button class="focus:outline-none -ml-10" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 whitespace-nowrap">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Name
                                        <a href="index.php?sort=nama&order=asc">↿</a>
                                        <a href="index.php?sort=nama&order=desc">⇂</a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Class
                                        <a href="index.php?sort=kelas&order=asc">↿</a>
                                        <a href="index.php?sort=kelas&order=desc">⇂</a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Gender
                                        <a href="index.php?sort=gender&order=asc">↿</a>
                                        <a href="index.php?sort=gender&order=desc">⇂</a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Address
                                        <a href="index.php?sort=alamat&order=asc">↿</a>
                                        <a href="index.php?sort=alamat&order=desc">⇂</a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Blood type
                                        <a href="index.php?sort=golongan&order=asc">↿</a>
                                        <a href="index.php?sort=golongan&order=desc">⇂</a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Parent Name
                                        <a href="index.php?sort=ibu&order=asc">↿</a>
                                        <a href="index.php?sort=ibu&order=desc">⇂</a>
                                    </th>
                                    <th class="relative px-3 py-3" scope="col"><span class="sr-only">Control</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php $i = 1; while ($siswa = $listSiswa->fetch_array()) {?>
                                    <tr>
                                        <!-- Nama -->
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <?php if (!empty($siswa['file'])) { ?>
                                                        <img class="h-10 w-10 rounded-full" src="<?php echo base_url() ?>/assets/images/<?php echo $siswa['file'] ?>" alt="">
                                                    <?php } else { ?>
                                                        <img class="h-10 w-10 rounded-full" src="assets/images/userimg.png">
                                                    <?php } ?>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <?= $siswa['nama']; ?>
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        <?= $siswa['nis']; ?>
                                                    </div> 
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $siswa['nama_kelas']; ?></div>
                                            <div class="text-sm text-gray-500"><?= $siswa['jurusan']; ?></div>
                                        </td>
                                        <td class="px-6 py-3 whitespace-nowrap"><?= $siswa['gender']; ?></td>
                                        <td class="px-6 py-3 whitespace-nowrap"><?= $siswa['alamat']; ?></td>
                                        <td class="px-6 py-3 whitespace-nowrap"><?= $siswa['golongan']; ?></td>
                                        <td class="px-6 py-3 whitespace-nowrap"><?= $siswa['ibukandung']; ?></td>
                                        <td class="px-3 py-3 whitespace-nowrap">
                                            <a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                            <a href="delete.php?nis=<?= $siswa["nis"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>