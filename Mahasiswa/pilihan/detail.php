<?php
session_start();

if (!isset($_SESSION["login"])) {
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
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<!-- content navbar  -->

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <!-- <img src="../assets/images/logo/logo.png" class="ms-3" alt="" width="40" height="40"> -->
        <a class="navbar-brand ps-3" href="index.html">Mahasiswa</a>
        <!-- Sidebar Toggle-->
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
        <!-- Navbar Search-->
        <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search here..." aria-label="Search here." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form> -->
        <div class="navbar-brand title text-white ms-auto d-flex justify-content-center align-items-center">
            <p class="mb-0">Halooo <?= $_SESSION["user"] ?></p>
        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#profile " data-bs-toggle="modal">My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../../Login/logout.php" onclick="return confirm('Yakin mau keluar?')">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <?php
    $username = $_SESSION["user"];
    $queryUser = mysqli_query($connect, "SELECT * FROM users  WHERE username = '$username'");
    $profile = mysqli_fetch_assoc($queryUser);

    $id = $_GET["id"];

    // Query data mahasiswa bedasarkan id
    $data = query("SELECT * FROM kandidat WHERE id_kandidat = $id")[0];

    ?>
    <!-- navbar end -->




    <!-- judul  -->
    <div class="col-md-10 p-5 pt-5"><br>
        <h3><i class="fa-solid fa-clipboard"></i> DETAIL KANDIDAT </h3>
        <hr>
        <div class="col-md-10 p-1 pt-3 text-secondary">
            <h6> Detail Kandidat</h6>
        </div>
        <!-- judul end  -->


        <!-- content  -->
        <form action="" method="post" enctype="multipart/form-data">
            <img src="../../assets/images/fotoKandidat/<?= $data["gambar"]; ?>" width="400"  class="rounded mx-auto d-block" alt="...">
            <br>
            <div class="row">
                <h6>Nama Kandidat</h6>
                <div class="col">
                    <label for="ketua" class="form-label text-dark">Ketua</label>
                    <input type="text" class="form-control bg-white" value=" <?= $data["ketua"]; ?>" readonly>
                </div>
                <div class="col">
                    <label for="wakil" class="form-label text-dark">Wakil</label>
                    <input type="text" class="bg-white form-control" readonly value=" <?= $data["wakil"]; ?>" />
                </div>
            </div>
            <br>
            <div class="row">
                <h6>Program Studi</h6>
                <div class="col">
                    <label for="ketua" class="form-label text-dark">Ketua</label>
                    <input type="text" class="bg-white form-control" readonly value="<?= $data["prodi_ketua"]; ?>">
                </div>
                <div class="col">
                    <label for="wakil" class="form-label text-dark">Wakil</label>
                    <input type="text" class="bg-white form-control" readonly value="<?= $data["prodi_wakil"]; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <h6>Visi dan Misi</h6>
                <div class="col">
                    <p for="visi" class="form-label text-dark">Visi</p>
                    <textarea name="" id="" cols="60" rows="5" readonly><?= $data["visi"]; ?></textarea>
                </div>
                <div class="col">
                    <p for="misi" class="form-label text-dark">Misi</p>
                    <textarea name="" id="" cols="60" rows="5" readonly><?= $data["misi"]; ?></textarea>

                </div>
            </div>


            <br>
            <a href="../../Mahasiswa/pilihan/pilihan.php" class="btn btn-secondary">Kembali</a>
        </form>
        <!-- content end  -->


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
                                <input type="text" name="ketua" value=": <?= $profile["alamat"]; ?>" class="form-control" id="ketua" style="border: none;">
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