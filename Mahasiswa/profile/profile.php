<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../index.html");
    exit;
}

require '../../function/function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mahasiswa-Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<!-- content navbar  -->

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <!-- <img src="../assets/images/logo/logo.png" class="ms-3" alt="" width="40" height="40"> -->
        <a class="navbar-brand ps-3" href="index.html">Mahasiswa</a>
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
                    <li><a class="dropdown-item" href="../../Login/logout.php">Logout</a></li>
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
                        <a class="nav-link" href="../profile/profile.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Profile
                        </a>
                        <a class="nav-link" href="../../Login/logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Log out
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <!-- sidebar end  -->

        <?php
        $username = $_SESSION["user"];
        $queryUser = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
        $profile = mysqli_fetch_assoc($queryUser);


        ?>


        <!-- content  -->
        <div id="layoutSidenav_content">
            <main class="p-4">
                <div class="container-fluid px-4">
                    <h1 class="">Profile</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">My Account</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <br>
                <div class="main-pages">
                    <div class="container-fluid">
                        <div class="row g-2 mb-3">
                            <div class="col-12">
                                <div class="d-block bg-white rounded shadow p-3">
                                    <h4>Haloooo <?= $_SESSION["user"] ?></h4>
                                    <hr>
                                    <div class="container text-justify">
                                        <div class="row">
                                            <div class="col">
                                                <table>
                                                    <tr>
                                                        <td class="p-2">Username</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["username"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">Nama Lengkap</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["nama_lengkap"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">Email</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["email"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">Alamat</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["alamat"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">Kelas</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["kelas"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">NPM</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["npm"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">Prodi</td>
                                                        <td class="p-2">:</td>
                                                        <td class="p-2"><?= $profile["prodi_mhs"]; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="tambah-profile.php">Lengkapi Data Diri</a>
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