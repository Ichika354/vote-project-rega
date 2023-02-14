<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../index.html");
    exit;
}


require '../../function/function.php';
$students = query("SELECT * FROM kandidat");

if (isset($_POST["vote"])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if (vote($_POST)) {
        header("Location: berhasil.php");
    } else {
        echo
        "<script>
                alert('Vote gagal :( ');
            </script>";
    }
}
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
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
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
    $queryUser = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
    $profile = mysqli_fetch_assoc($queryUser);


    ?>




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



    <div id="layoutSidenav_content">
        <main>
            <br><br><br>

            <h1 class="text-center">SILAHKAN VOTE</h1>
            <hr><br>
            <!-- <center><button type="button" href="../../Mahasiswa/vote/vote.php" class="btn btn-secondary">Kembali</button></center> -->

            <!-- content  -->
            <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 10em;">
                <?php foreach ($students as $student) : ?>

                    <div class="card mb-3 col-ms-4" style="max-width: 1000px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../assets/images/fotoKandidat/<?= $student["gambar"]; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <form action="" method="post">
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="<?= $student["id_kandidat"]; ?>">
                                        <h5 class="card-title">Pasangan Kandidat</h5>
                                        <h6 class="card-text"> Ketua :</h6>
                                        <p> <?= $student["ketua"]; ?></p>
                                        <input type="hidden" name="ketua" value="<?= $student["ketua"]; ?>">
                                        <h6 class="card-text"> Wakil :</h6>
                                        <p><?= $student["wakil"]; ?></p>
                                        <input type="hidden" name="wakil" value="<?= $student["wakil"]; ?>">
                                        <button name="vote" class="btn btn-success" onclick="return confirm('Yakin mau vote?')">Vote</button>
                                        <a href="../../Mahasiswa/pilihan/detail.php?id=<?= $student["id_kandidat"]; ?>" class="btn btn-primary">Detail</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
    <!-- content end  -->

    <?php

    ?>


    <div class="modal" tabindex="-1" id="detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kandidat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <fieldset disabled>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $data["id"] ?>">
                        <h6 for="visi" class="form-label">Nama Kandidat</h6>
                        <label class="modal-title">Ketua</label>
                        <input type="text" name="ketua" value="<?= $data["ketua"] ?>" class="form-control" id="ketua">
                        <label class="modal-title">Wakil</label>
                        <input type="text" name="wakil" class="form-control" id="ketua">
                        <br>
                        <h6 for="visi" class="form-label">Prodi Kandidat</h6>
                        <label class="modal-title">Ketua</label>
                        <input type="text" name="ketua" class="form-control" id="ketua">
                        <label class="modal-title">Wakil</label>
                        <input type="text" name="ketua" class="form-control" id="ketua">
                        <br>
                        <h6 for="visi" class="form-label">Visi dan Misi</h6>
                        <label class="modal-title">Visi</label>
                        <input type="text" name="ketua" class="form-control" id="ketua">
                        <label class="modal-title">Misi</label>
                        <input type="text" name="ketua" class="form-control" id="ketua">
                    </div>
                </fieldset>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>








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