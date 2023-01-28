<?php
// session_start();

// $session = isset($_SESSION["login"]);

// if (!$session) {
//    header("Location: ../../index.php");
//     exit;
// }


require '../../function/function.php';

$data_user = mysqli_query($connect, "SELECT * FROM users");
$data_kandidat = mysqli_query($connect, "SELECT * FROM kandidat");

$jumlah_user = mysqli_num_rows($data_user);
$jumlah_kandidat = mysqli_num_rows($data_kandidat);



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
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<!-- content navbar  -->

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <!-- <img src="../assets/images/logo/logo.png" class="ms-3" alt="" width="40" height="40"> -->
        <a class="navbar-brand ps-3" href="index.html">Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search here..." aria-label="Search here." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../Admin/profile.php">My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../Login/login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- navbar end -->



    <!-- sidebar  -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../../Admin/dashboard/dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Main Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../user/data-user.php">Data User</a>
                                <a class="nav-link" href="../kandidat/data-kandidat.php">Data Kandidat</a>
                                <a class="nav-link" href="../laporan/laporan-hasil-vote.php">Laporan Hasil Vote</a>
                            </nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">My Account</div>
                        <a class="nav-link" href="../profile/profile.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Profile
                        </a>
                        <a class="nav-link" href="../Login/login.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Log out
                        </a>
                    </div>
                </div>

            </nav>  
        </div>
        <!-- sidebar end  -->



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
                                        <h5 class="card-title"><?= 1; ?></h5>
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