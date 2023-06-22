<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../../");
    exit;
}

require  '../../function/function.php';


//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo
        "<script>
                alert('Kandidat berhasil ditambahkan');
                window.location.href = '../../Admin/kandidat/data-kandidat.php';
            </script>";
    } else {
        echo
        "<script>
                alert('Kandidat gagal ditambahkan :( ');
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
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<!-- content navbar  -->

<body class="sb-nav-fixed">
    <?php include "../../Navbar/index.php" ?>
    <!-- judul  -->
    <div class="col-md-10 p-5 pt-5"><br>
        <h3><i class="fa-solid fa-clipboard"></i> TAMBAH KANDIDAT </h3>
        <hr>
        <div class="col-md-10 p-1 pt-3 text-secondary">
            <h6> Tambah Kandidat</h6>
        </div>
        <!-- judul end  -->


        <!-- content  -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <h6>Data Kandidat</h6>
                <label for="ketua" class="form-label text-dark">Ketua Kandidat</label>
                <input type="text" name="ketua" id="ketua" required class="form-control" placeholder="ketua kandidat...">

                <label for="wakil" class="form-label text-dark">Wakil Kandidat</label>
                <input type="text" name="wakil" id="wakil" required class="form-control" placeholder="wakil kandidat...">
            </div>

            <h6>Program Studi</h6>
            <label for="prodi_ketua" class="form-label text-dark">Prodi Ketua</label>
            <select class="form-select" name="prodi_ketua" aria-label="Default select example">
                <option selected>Pilih Program Studi</option>
                <option>D3 Teknik Informatika</option>
                <option>D3 Akuntansi</option>
                <option>D3 Logistik Bisnis</option>
                <option>D4 Teknik Informatika</option>
                <option>D4 Akuntansi</option>
                <option>D4 Logistik Bisnis</option>
                <option>D4 E-Commerce Logistik</option>
                <option>S1 Sains Data</option>
                <option>S1 Manajemen Transportasi</option>
                <option>S1 Manajemen Logistik</option>
            </select>
            <br>
            <label for="prodi_wakil" class="form-label text-dark">Prodi Wakil</label>
            <select class="form-select" name="prodi_wakil" aria-label="Default select example">
                <option selected>Pilih Program Studi</option>
                <option>D3 Teknik Informatika</option>
                <option>D3 Akuntansi</option>
                <option>D3 Logistik Bisnis</option>
                <option>D4 Teknik Informatika</option>
                <option>D4 Akuntansi</option>
                <option>D4 Logistik Bisnis</option>
                <option>D4 E-Commerce Logistik</option>
                <option>S1 Sains Data</option>
                <option>S1 Manajemen Transportasi</option>
                <option>S1 Manajemen Logistik</option>
            </select>

            <br>



            <div class="mb-2">
                <label for="visi" class="form-label">Visi</label>
                <textarea class="form-control" name="visi" id="visi" rows="3" placeholder="masukkan visi..."></textarea>
            </div>

            <div class="mb-2">
                <label for="misi" class="form-label">Misi</label>
                <textarea class="form-control" name="misi" id="misi" rows="3" placeholder="masukkan misi..."></textarea>
            </div>

            <br>

            <label for="basic-url" class="form-label">Foto</label>
            <div class="input-group mb-3">
                <input type="file" name="gambar" class="form-control" id="inputGroupFile02">
            </div>

            <br>

            <button type="submit" name="submit" class="btn btn-success text-light">Submit</button>
            <a href="../../Admin/kandidat/data-kandidat.php" class="btn btn-secondary">Kembali</a>
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