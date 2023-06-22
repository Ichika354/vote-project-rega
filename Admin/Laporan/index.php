<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../../index.html");
    exit;
}

require '../../function/function.php';
$students = query("SELECT * FROM laporan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Laporan Vote</title>
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
                <h1 class="">Laporan Hasil Vote</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main Menu</a></li>
                    <li class="breadcrumb-item active">Laporan Hasil Vote</li>
                </ol>
            </div>
            <br>
            <table class="table table-striped text-center">
                <thead>
                    <tr class="table-dark">
                        <th scope="col" width="30">No.</th>
                        <th scope="col">NAMA PEMILIH</th>
                        <th scope="col">PROGRAM STUDI</th>
                        <th scope="col">PILIHAN</th>
                        <th scope="col">TANGGAL MEMILIH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($students as $student) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>Ghaida Fasya</td>
                            <td>D4 Teknik Informatika</td>
                            <td><?= $student["ketua"] ?> & <?= $student["wakil"] ?></td>
                            <td>12-01-2023</td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
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