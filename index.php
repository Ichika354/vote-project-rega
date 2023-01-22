<?php 
//    session_start();

//    if (isset($_SESSION["login"])) {
//        header("Location: ../Admin/dashboard/dashboard.php");
//        exit;   
//    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="assets/images/logo/ulbikotak.png">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar bg-warning sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo/logoWeb.png" alt="Logo" class="d-inline-block align-text-top w-75">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto w-50 d-flex justify-content-end align-items-center">
                    <button class="btn btn-dark" onclick="return window.location.href = 'Login/login.php'">Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar end -->

    <div class="bg">
        <div class="container p-5 putih">
            <div class="box-1">
                <div class="title-box text-center h-25 d-flex align-items-end">
                    <h2>Vote Presma</h2>
                </div>
                <div class="deskription-box mb-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ratione aspernatur provident in enim nam itaque id dignissimos, quis obcaecati quas, tenetur ducimus nemo ut animi, excepturi voluptatum? Dignissimos, delectus!</p>
                    <br>
                    <button class="btn btn-dark">Login</button>
                </div>
            </div>
            <div class="box-2">
               <img src="assets/images/bg/intro-img.svg" width="500" alt="">
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>