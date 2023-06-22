<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../");
    exit;
}


require '../function/function.php';

$data_user = mysqli_query($connect, "SELECT * FROM users");
$data_kandidat = mysqli_query($connect, "SELECT * FROM kandidat");
$data_laporan = mysqli_query($connect, "SELECT * FROM laporan");

$jumlah_user = mysqli_num_rows($data_user);
$jumlah_kandidat = mysqli_num_rows($data_kandidat);
$jumlah_laporan = mysqli_num_rows($data_laporan);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="Style/index.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<!-- content navbar  -->

<body class="sb-nav-fixed">
    
    <?php include "Navbar/index.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card p-2 shadow">
                                <div class="d-flex align-items-center px-2">
                                    <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                    <div class="card-body text-end">
                                        <h5 class="card-title"><?= $jumlah_user; ?></h5>
                                        <p class="card-text">Data User</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a class="small text-dark text-start fw-bold stretched-link" href="../../Admin/user/data-user.php">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card p-2 shadow">
                                <div class="d-flex align-items-center px-2">
                                    <i class="fa fa-user float-start fa-3x py-auto" aria-hidden="true"></i>
                                    <div class="card-body text-end">
                                        <h5 class="card-title"><?= $jumlah_kandidat ?></h5>
                                        <p class="card-text">Data Kandidat</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a class="small text-dark text-start fw-bold stretched-link" href="../../Admin/kandidat/data-kandidat.php">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card p-2 shadow">
                                <div class="d-flex align-items-center px-2">
                                    <i class="fa fa-box float-start fa-3x py-auto" aria-hidden="true"></i>
                                    <div class="card-body text-end">
                                        <h5 class="card-title"><?= $jumlah_laporan ?></h5>
                                        <p class="card-text">Laporan Vote</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a class="small text-dark text-start fw-bold stretched-link" href="../../Admin/laporan/laporan-hasil-vote.php">View Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
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