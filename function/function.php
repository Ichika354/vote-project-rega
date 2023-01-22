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
    
        $nama_kandidat = htmlspecialchars($data["nama_kandidat"]) ;
        $prodi = ($data["prodi"]);
        $jabatan = ($data["jabatan"]);
        $visi = htmlspecialchars($data["visi"]);
        $misi = htmlspecialchars($data["misi"]);
    
        //upload gambar
    
        $gambar = upload();
    
        if (!$gambar) {
            return false;
        }
        
    
        //query insert
        $query = "INSERT INTO kandidat VALUES ('' , '$gambar', '$nama_kandidat' ,'$prodi' , '$jabatan', '$visi', '$misi')";
        mysqli_query($connect, $query);
    
        return mysqli_affected_rows($connect);
    }
    
    function upload(){
    
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
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
    
    
    
    
        move_uploaded_file($tmpName, '../assets/images/'.$namaFileBaru);
    
        return $namaFileBaru;
    
    }
