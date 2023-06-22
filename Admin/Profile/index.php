<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../../index.html");
    exit;
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
    <title>Admin-Laporan Vote</title>

    <title>Dashboard Admin</title>
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
                <h1 class="">Profile</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
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
                                <h4>Project Team</h4>
                                <hr>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <img src="../../assets/images/profile/girl.png" width="100" height="100" class="rounded float-start" alt="...">
                                            Ghaida Fasya Y.A <br> D4-Teknik Informatika <br> 1B
                                        </div>
                                        <div class="col">
                                            <img src="../../assets/images/profile/boy.png" width="100" height="100" class="rounded float-start" alt="...">
                                            M. Fachriza Farhan <br> D4-Teknik Informatika <br> 1A

                                        </div>

                                    </div>

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