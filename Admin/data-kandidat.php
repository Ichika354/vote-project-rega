<?php 
    require '../function/function.php';

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
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
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
                        <a class="nav-link" href="../Admin/dashboard.php">
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
                                <a class="nav-link" href="../Admin/data-user.php">Data User</a>
                                <a class="nav-link" href="../Admin/data-kandidat.php">Data Kandidat</a>
                                <a class="nav-link" href="../Admin/laporan-hasil-vote.php">Laporan Hasil Vote</a>
                            </nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">My Account</div>
                        <a class="nav-link" href="../Admin/profile.php">
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



        <!-- content  -->
        <div id="layoutSidenav_content">
            <main class="p-4">
                <div class="container-fluid px-4">
                    <h1 class="">Data Kandidat</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Main Menu</a></li>
                        <li class="breadcrumb-item active">Data Kandidat</li>
                    </ol>
                </div>

                
                <br>
                <a type="button" class="btn btn-success" href="../Admin/create-kandidat.php">Tambah</a>
                <hr>
                
                <table class="table table-striped text-center">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col" width="30">ID</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama Kandidat</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Visi</th>
                            <th scope="col">Misi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($students as $student) : ?>
                        <tr>
                            <th scope="row"><?= $student["id_kandidat"]; ?></th>
                            <td><img src="../assets/images/<?= $student["gambar"]; ?>" width="60" height="40" alt=""></td>
                            <td><?= $student["nama_kandidat"]; ?></td>
                            <td><?= $student["prodi"]; ?></td>
                            <td><?= $student["jabatan"]; ?></td>
                            <td><?= $student["visi"]; ?></td>
                            <td><?= $student["misi"]; ?></td>
                            <td>
                                <!-- <a type="button" class="btn btn-primary" href="">Detail</a> -->
                                <a type="button" class="btn btn-warning" href="">Edit</a>
                                <a type="button" class="btn btn-danger" href="">Hapus</a>
                            </td>
                        </tr>
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