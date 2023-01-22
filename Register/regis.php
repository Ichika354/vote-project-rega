<?php 

    require '../function/function.php';

    if(isset($_POST["submit"])) {

        if ( regis($_POST) > 0 ){
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

    <title>LOGIN VOTE</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../assets/images/bg/bg-login.png" alt="Image" class="img-fluid" width="600" height="600">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3 class="text-center">LOGIN HERE</h3>
                                <p class="mb-4 text-center">Universitas Logistik dan Bisnis Internasinal.</p>
                            </div>
                            <form action="" method="post" class="pb-5">
                                <label for="username"  class="form-label">Nama Lengkap</label>
                                <div class="form-group first">
                                    <input required name="nama_lengkap" type="text" class="form-control" id="username">
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
                                <hr>
                                <input name="submit" type="submit" value="Regis" class="btn btn-block btn-primary">

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