<?php 

    require '../../function/function.php';

    $id = $_GET["id"];
    if (hapus($id) > 0) {
        echo "  <script>
                    alert ('Data Berhasil di Hapus..');
                    window.location.href = '../../Admin/kandidat/data-kandidat.php'
                </script>";
    } else {
        echo "  <script>
                    alert ('Data Gagal di hapus :(');
                    window.location.href = '../../Admin/kandidat/data-kandidat.php'
                </script>";
    }

?>