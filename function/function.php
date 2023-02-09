<?php 

    $connect = mysqli_connect("localhost", "root", "", "vote-rega");

    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $connect;
    
        $ketua = htmlspecialchars($data["ketua"]) ;
        $wakil = htmlspecialchars($data["wakil"]);
        $prodi_ketua = ($data["prodi_ketua"]);
        $prodi_wakil = htmlspecialchars($data["prodi_wakil"]);
        $visi = htmlspecialchars($data["visi"]);
        $misi = htmlspecialchars($data["misi"]);
    
        //upload gambar
    
        $gambar = upload();
    
        if (!$gambar) {
            return false;
        }
        
    
        //query insert
        $query = "INSERT INTO kandidat VALUES ('' , '$gambar', '$ketua' ,'$wakil' , '$prodi_ketua', '$prodi_wakil', '$visi', '$misi')";
        mysqli_query($connect, $query);
    
        return mysqli_affected_rows($connect);
    }
    
    function upload(){
    
        $namaFile = $_FILES["gambar"]["name"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];
    
        //cek apakah ada gambar yg di upload atau tidak
        if ($error === 4) {
            echo
            "<script>
                alert('Upload gambar terlebih dahulu');
            </script>";
            return false;
        }
    
        //cek apakah yang di upload gambar atau bukan
        $ekstensiGambarValid = ["jpg", "jpeg", "png"];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo
            "<script>
                alert('Upload gambar dongg');
            </script>";
            return false;
        }
        //lolos semua pengecekan
        //generate nama gambar baru
    
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
    
    
    
    
        move_uploaded_file($tmpName, '../../assets/images/fotoKandidat/'.$namaFileBaru);
    
        return $namaFileBaru;
    
    }

    function regis($data) {
        global $connect;
    
        $nama_lengkap = stripslashes($data["nama_lengkap"]);
        $username = strtolower(stripslashes($data["username"]));
        $email = strtolower(stripslashes($data["email"]));
        $password = mysqli_real_escape_string($connect, $data["password"]);
        $confirmPassword = mysqli_real_escape_string($connect, $data["confirm_password"]);
        $kelas = mysqli_real_escape_string($connect, $data["kelas"]);
        $npm = mysqli_real_escape_string($connect, $data["npm"]);
        $prodi = mysqli_real_escape_string($connect, $data["prodi"]);
        $alamat = mysqli_real_escape_string($connect, $data["alamat"]);
    
        //cek apakah username sudah ada atau belum
        $result = mysqli_query($connect, "SELECT username FROM users WHERE username = '$username'");
        $result1 = mysqli_query($connect, "SELECT username FROM users WHERE npm = '$npm'");
        $result2 = mysqli_query($connect, "SELECT username FROM users WHERE email = '$email'");
    
        if ( mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username yang dipilih sudah terdaftar')
                </script>";
                return false;
        } elseif (mysqli_fetch_assoc($result1)) {
            echo "<script>
                    alert('NPM yang dipilih sudah terdaftar')
                </script>";
                return false;
        } elseif (mysqli_fetch_assoc($result2)) {
            echo "<script>
                    alert('Email yang dipilih sudah terdaftar')
                </script>";
                return false;
        }
    
    
        if ($password !== $confirmPassword) {
            echo "<script>
                    alert('Password tidak sama')
                </script>";
            return false;
        } 
        
        //enskripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        //tambahkan userbaru ke database
        mysqli_query($connect, "INSERT INTO users VALUES('','$nama_lengkap', '$username','$email', '$password', 'user', '$kelas', '$npm', '$prodi', '$alamat', '')");
    
        return mysqli_affected_rows($connect);
    }

    function hapus($id) {
        global $connect;
        mysqli_query($connect, "DELETE FROM kandidat WHERE id_kandidat = $id");
    
        return mysqli_affected_rows($connect);
    }

    function ubah($data) {
        global $connect;
    
        $id_kandidat      = $data["id_kandidat"];
        $ketua            = $data["ketua"];
        $wakil            = $data["wakil"];
        $prodi_ketua      = $data["prodi_ketua"];
        $prodi_wakil      = $data["prodi_wakil"];
        $visi             = $data["visi"];
        $misi             = $data["misi"];
        $gambarLama       = $data["gambarLama"];
        // $gambar           = $data["gambar"];
    
        if($_FILES["gambar"]["error"] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        //query insert
        $query = "UPDATE kandidat SET
                    gambar        = '$gambar',
                    ketua         = '$ketua',
                    wakil         = '$wakil',
                    prodi_ketua   = '$prodi_ketua',
                    prodi_wakil   = '$prodi_wakil',
                    visi          = '$visi',
                    misi          = '$misi'
    
                  WHERE id_kandidat= $id_kandidat   
        
                ";
        mysqli_query($connect, $query);
    
        return mysqli_affected_rows($connect);
    }

    function add($data) {
        global $connect;
    
        $username = htmlspecialchars($data["username"]);
        $kelas = htmlspecialchars($data["kelas"]) ;
        $npm = htmlspecialchars($data["npm"]);
        $prodi = $data["prodi"];
        $alamat = htmlspecialchars($data["alamat"]);
       
        $query = "UPDATE users SET
                    
                    kelas     = '$kelas',
                    npm       = '$npm',
                    prodi_mhs = '$prodi',
                    alamat    = '$alamat'
    
                  WHERE username = $username
        
                ";

       
        mysqli_query($connect, $query);
    
        return mysqli_affected_rows($connect);
    }

    function vote($data) {
        global $connect;

        $id = htmlspecialchars($data["id"]) ;
        $ketua = htmlspecialchars($data["ketua"]) ;
        $wakil = htmlspecialchars($data["wakil"]) ;
        
    

        
    
        //query insert
        $query = "INSERT INTO laporan VALUES ('', '$id', '$ketua', '$wakil', '')";
        mysqli_query($connect, $query);
    
        return mysqli_affected_rows($connect);
    }

?>