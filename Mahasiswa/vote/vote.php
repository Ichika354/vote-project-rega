<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../index.html");
    exit;
}

require '../../function/function.php';
$students = query("SELECT * FROM kandidat");

$username = $_SESSION["user"];
$queryUser = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
$profile = mysqli_fetch_assoc($queryUser);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    .h {
        width: 50%;
    }
</style>

<!-- content navbar  -->

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <!-- <img src="../assets/images/logo/logo.png" class="ms-3" alt="" width="40" height="40"> -->
        <a class="navbar-brand ps-3" href="index.html">Mahasiswa</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="navbar-brand title text-white ms-auto d-flex justify-content-center align-items-center">
            <p class="mb-0">Halooo <?= $_SESSION["user"] ?></p>
        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#profile" data-bs-toggle="modal">My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../../Login/logout.php" onclick="return confirm('Yakin mau keluar?')">Logout</a></li>
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
                        <div class="sb-sidenav-menu-heading">Main Menu</div>
                        <a class="nav-link" href="../../Mahasiswa/vote/vote.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Vote
                        </a>

                        <div class="sb-sidenav-menu-heading">My Account</div>
                        <a class="nav-link" href="../../Mahasiswa/profile/profile.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Profile
                        </a>
                        <a class="nav-link" href="../../Login/logout.php" onclick="return confirm('Yakin mau keluar?')">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Log out
                        </a>
                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- sidebar end  -->

    <!-- content  -->
    <br><br><br><br><br><br><br><br>
    <div class="d-flex justify-content-center align-items-center">

        <div class="card text-center h">
            <div class="card-header">
                E-Voting Presma ULBI
            </div>
            <div class="card-body">
                <h5 class="card-title"> VOTE </h5>
                <p class="card-text"><i>Semua orang berhak memilih dan dipilih.</i></p>
                <a href="../../Mahasiswa/pilihan/pilihan.php" class="btn btn-dark">Vote Disini</a>
            </div>
            <div class="card-footer text-muted">
                Universitas Logistik dan Bisnis Internasional
            </div>
        </div>
    </div>
    <!-- content end  -->

    <div class="modal" tabindex="-1" id="profile">
        <div class="modal-dialog">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="modal-header">
                    <h5 class="card-title">Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body ">
                            <div class="profile d-flex justify-content-center align-items-center ">
                                <label class="modal-title w-75">Username</label>
                                <input type="text" name="ketua" value=": <?= $profile["username"]; ?>" class="form-control" id="ketua" style="border: none;">
                            </div>
                            <div class="profile d-flex justify-content-center align-items-center ">
                                <label class="modal-title w-75">Nama Lengkap</label>
                                <input type="text" name="ketua" value=": <?= $profile["nama_lengkap"]; ?>" class="form-control" id="ketua" style="border: none;">
                            </div>
                            <div class="profile d-flex justify-content-center align-items-center ">
                                <label class="modal-title w-75">Email</label>
                                <input type="text" name="ketua" value=": <?= $profile["email"]; ?>" class="form-control" id="ketua" style="border: none;">
                            </div>
                            <div class="profile d-flex justify-content-center align-items-center ">
                                <label class="modal-title w-75">Alamat</label>
                                <input type="text" name="ketua" value=": <?= $profile["email"]; ?>" class="form-control" id="ketua" style="border: none;">
                            </div>

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