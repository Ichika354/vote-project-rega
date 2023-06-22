<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../../index.html");
    exit;
}

require '../../function/function.php';

$students = query("SELECT * FROM kandidat");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Data Kandidat</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<!-- content navbar  -->

<body class="sb-nav-fixed">
    <?php include "../Navbar/index.php" ?>
    <!-- content  -->
    <div id="layoutSidenav_content">
        <main class="p-4">
            <div class="container-fluid px-4">
                <h1 class="">Data Kandidat</h1>
                <!-- <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main Menu</a></li>
                    <li class="breadcrumb-item active">Data Kandidat</li>
                </ol> -->
            </div>

            <hr>
            <a type="button" class="btn btn-success" href="../../config/create/create-kandidat.php"><i class="fa-solid fa-user-plus"></i> Tambah data kandidat</a>

            <!-- <table class="table table-striped text-center ">
                <thead>
                    <tr class="table-dark">
                        <th scope="col" rowspan="2" class="pb-4">ID</th>
                        <th scope="col" rowspan="2" class="pb-4">Foto</th>
                        <th scope="col" colspan="2">Pasangan Kandidat</th>
                        <th scope="col" colspan="2">Prodi</th>
                        <th scope="col" rowspan="2" class="pb-4">Visi</th>
                        <th scope="col" rowspan="2" class="pb-4">Misi</th>
                        <th scope="col" rowspan="2" class="pb-4">Aksi</th>
                    </tr>
                    <tr class="table-dark">
                        <th scope="col">Ketua</th>
                        <th scope="col">Wakil</th>
                        <th scope="col">Ketua</th>
                        <th scope="col">Wakil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student) : ?>
                        <tr>
                            <th scope="row"><?= $student["id_kandidat"]; ?></th>
                            <td><img src="../../assets/images/fotoKandidat/<?= $student["gambar"]; ?>" width="70" height="80" alt=""></td>
                            <td><?= $student["ketua"]; ?></td>
                            <td><?= $student["wakil"]; ?></td>
                            <td><?= $student["prodi_ketua"]; ?></td>
                            <td><?= $student["prodi_wakil"]; ?></td>
                            <td><?= $student["visi"]; ?></td>
                            <td><?= $student["misi"]; ?></td>
                            <td>
                                <a type="button" class="btn btn-warning" href="../../config/update/update-kandidat.php?id=<?= $student["id_kandidat"]; ?>">Edit</a>
                                <hr>
                                <a type="button" class="btn btn-danger" href="../../config/delete/delete.php?id=<?= $student["id_kandidat"]; ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                </tbody>
            </table> -->
            <br><br>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Pasangan Kandidat 1</h5>
                            <center> <img src="../../assets/images/profile/boy.png" alt="" width="150px" height="150px"></center>
                            <br>
                            <center>
                                <a href="#" class="btn btn-primary">View</a>
                                <a href="update/?id=<?= $student["id_kandidat"]; ?>" class="btn btn-warning">Edit</a>
                                <a href="#+" class="btn btn-danger">Delete</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>