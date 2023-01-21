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
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
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


    <!-- judul  -->
    <div class="col-md-10 p-5 pt-5"><br>
        <h3><i class="fa-solid fa-clipboard"></i> TAMBAH KANDIDAT </h3>
        <hr>
        <div class="col-md-10 p-1 pt-3 text-secondary">
            <h6> Tambah Kandidat</h6>
        </div>
        <!-- judul end  -->


        <!-- content  -->
        <form action="" method="post">
            <div class="mb-3">
                <label for="judul_film" class="form-label text-dark">Nama Kandidat</label>
                <input type="text" name="judul_film" id="judul_film" required class="form-control" placeholder="masukkan nama kandidat ...">
            </div>

            <label for="prodi" class="form-label text-dark">Program Studi</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Program Studi</option>
                <option value="1">D3 Teknik Informatika</option>
                <option value="1">D3 Akuntansi</option>
                <option value="1">D3 Logistik Bisnis</option>
                <option value="2">D4 Teknik Informatika</option>
                <option value="2">D4 Akuntansi</option>
                <option value="2">D4 Logistik Bisnis</option>
                <option value="2">D4 E-Commerce Logistik</option>
                <option value="2">S1 Sains Data</option>
                <option value="2">S1 Manajemen Transportasi</option>
                <option value="2">S1 Manajemen Logistik</option>
            </select>

            <br>

            <label for="prodi" class="form-label text-dark">Fakultas</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Fakultas</option>
                <option value="1">Vokasi</option>
                <option value="1">FLTB</option>
            </select>

            <br>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Visi - Misi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukkan visi-misi ..."></textarea>
            </div>






            <label for="basic-url" class="form-label">Foto</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>

            <br>

            <button type="submit" name="submit" class="btn btn-success text-light">Submit</button>
            <a href="../Admin/data-kandidat.php" class="btn btn-secondary">Kembali</a>
        </form>
        <!-- content end  -->


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