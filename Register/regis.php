<?php

require '../function/function.php';

if (isset($_POST["submit"])) {

    if (regis($_POST) > 0) {
        echo
        "<script>
                alert('Akun berhasil terbuat');
                window.location.href = '../Login/login.php'
            </script>";
    } else {
        echo mysqli_error($connect);
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/font/icomoon/style.css">

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>REGISTER VOTE</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start align-items-center w-25" style="margin-bottom: 10rem; padding-left: 0;">
                    <img src="../assets/images/bg/bg-login.png" alt="Image" class="img-fluid" width="300" height="300">
                </div>
                <div class="col-md-6 contents w-75">
                    <div class="row justify-content-center w-100">
                        <div class="col-md-8 w-100">
                            <div class="mb-4">
                                <h3 class="text-center">REGISTER HERE</h3>
                                <p class="mb-4 text-center">Universitas Logistik dan Bisnis Internasinal.</p>
                            </div>
                            <form action="" method="post" class="pb-5 w-100">
                                <div class="w-100 d-flex gap-5">
                                    <div class="w-50">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <div class="form-group first">
                                            <input required name="nama_lengkap" type="text" class="form-control" id="nama_lengkap">
                                        </div>
                                        <label for="username" class="form-label">Username</label>
                                        <div class="form-group first">
                                            <input required name="username" type="text" class="form-control" id="username">
                                        </div>
                                        <label for="email" class="form-label">Email</label>
                                        <div class="form-group first">
                                            <input required name="email" type="text" class="form-control" id="email">

                                        </div>
                                        <label for="password" class="form-label">Password</label>
                                        <div class="form-group last mb-4">
                                            <input required name="password" type="password" class="form-control" id="password">
                                        </div>
                                        <label for="c-password" class="form-label">Confirm Password</label>
                                        <div class="form-group last mb-4">
                                            <input required name="confirm_password" type="password" class="form-control" id="c-password">
                                        </div>
                                    </div>
                                    <div class="w-50">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <div class="form-group first">
                                            <select required name="kelas" class="form-select form-select-sm" aria-label=".form-select-sm example" id="kelas">
                                                <option selected>Pilih kelas</option>
                                                <optgroup label="1">
                                                    <option>1-A</option>
                                                    <option>1-B</option>
                                                    <option>1-C</option>
                                                    <option>1-D</option>
                                                    <option>1-E</option>
                                                </optgroup>
                                                <optgroup label="2">
                                                    <option>2-A</option>
                                                    <option>2-B</option>
                                                    <option>2-C</option>
                                                    <option>2-D</option>
                                                    <option>2-E</option>
                                                </optgroup>
                                                <optgroup label="3">
                                                    <option>3-A</option>
                                                    <option>3-B</option>
                                                    <option>3-C</option>
                                                    <option>3-D</option>
                                                    <option>3-E</option>
                                                </optgroup>
                                                <optgroup label="4">
                                                    <option>4-A</option>
                                                    <option>4-B</option>
                                                    <option>4-C</option>
                                                    <option>4-D</option>
                                                    <option>4-E</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <br>
                                        <label for="npm" class="form-label">NPM</label>
                                        <div class="form-group first">
                                            <input required name="npm" type="text" class="form-control" id="npm">
                                        </div>
                                        <br>
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <div class="form-group first">
                                            <input required name="alamat" type="text" class="form-control" id="npm">
                                        </div>

                                        <br>

                                        <label for="prodi" class="form-label">Prodi</label>
                                        <div class="form-group first">
                                            <select required name="prodi" class="form-select form-select-sm" aria-label=".form-select-sm example" id="prodi">
                                                <option selected>Pilih prodi</option>
                                                <optgroup label="Vokasi">
                                                    <option>D3 Teknik Informatika</option>
                                                    <option>D3 Akutansi</option>
                                                    <option>D3 Manajemen Bisnis</option>
                                                    <option>D3 Manajemen Logistik</option>
                                                    <option>D3 Manajemen Informatika</option>
                                                    <option>D4 Teknik Informatika</option>
                                                    <option>D4 Manajemen Bisnis</option>
                                                    <option>D4 Akutansi Keuangan</option>
                                                    <option>D4 Manajemen Bisnis</option>
                                                    <option>D4 Logistik Bisnis</option>
                                                    <option>D4 E-Commerce Logistik</option>
                                                </optgroup>
                                                <optgroup label="FLTB">
                                                    <option>S1 Sains Data</option>
                                                    <option>S1 Manajemen Transportasi</option>
                                                    <option>S1 Digital Bisnis</option>
                                                    <option>S1 Manajemen Rekayasa</option>
                                                    <option>S1 Manajemen Logistik</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <input name="submit" type="submit" value="Regis" class="btn btn-block btn-primary">
                                <br><br>
                                <div class=" mb-5 align-items-center">
                                    <p class="text-center">Already have an account? <a href="../Login/login.php"> Login</a> here.</p>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>