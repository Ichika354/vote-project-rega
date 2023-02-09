<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: ../Mahasiswa/vote/vote.php");
} elseif (isset($_SESSION["admin"])) {
    header("Location: ../Admin/dashboard/dashboard.php");
}



require '../function/function.php';

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND email = '$email'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;
            $_SESSION["user"] = $username;
            echo "<script>
                        window.location.href = '../Mahasiswa/vote/vote.php'
                        </script>";
            exit;
        }
    }

    $result2 = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
    $cek = mysqli_num_rows($result2);

    if ($cek > 0) {
        global $result2;

        $data = mysqli_fetch_assoc($result2);

        if ($data["level"] === "admin") {
            $_SESSION["admin"] = true;
            echo "<script>
                    window.location.href = '../Admin/dashboard/dashboard.php'
                </script>";
        }
    }

    $error = true;
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
                                <?php if (isset($error)) : ?>
                                    <p class="text-danger">Username,password atau email salah</p>
                                <?php endif; ?>
                            </div>
                            <form action="" method="post">
                                <label for="username" class="form-label">Username</label>
                                <div class="form-group first">
                                    <input required type="text" name="username" class="form-control" id="username">
                                </div>
                                <br>
                                <label for="email" class="form-label">Email</label>
                                <div class="form-group first">
                                    <input required type="text" name="email" class="form-control" id="email">

                                </div>
                                <br>
                                <label for="password" class="form-label">Password</label>
                                <div class="form-group last mb-4">
                                    <input required type="password" name="password" class="form-control" id="password">

                                </div>
                                <hr>
                                <div class=" mb-5 align-items-center">
                                    <p class="text-center">Don't have an account? <a href="../Register/regis.php"> Register</a> here.</p>
                                    <p class="text-center"><a href="../index.html">Back</a></p>
                                </div>
                                <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">
                                    
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