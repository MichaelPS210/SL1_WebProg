<?php

    session_start();
    if(isset($_POST['register'])){
        $ctr = 0;
        $nama_depan = $_POST['nama_depan'];
        $nama_tengah = $_POST['nama_tengah'];
        $nama_belakang = $_POST['nama_belakang'];
        $nik = $_POST['nik'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $warga_negara = $_POST['warga_negara'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $kode_pos = $_POST['kode_pos'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        
        if($_POST['password1'] != $_POST['password2']){
            $ctr = $ctr + 1;
            echo "Password1 dan Passsword 2 tidak sama <br/>";
        }
        if(strlen($_POST['nik']) != 16){
            $ctr = $ctr + 1;
            echo "NIK tidak terdiri dari 16 digit <br/>";
        }
        if(strlen($_POST['kode_pos']) != 5){
            $ctr = $ctr + 1;
            echo "Kode pos tidak terdiri dari 5 digit <br/>";
        }
        if(!str_ends_with($_POST['email'],'@gmail.com')){
            $ctr = $ctr + 1;
            echo "Email harus diakhiri @gmail.com <br/>";
        }
        if(strlen($_POST['tanggal_lahir'])==0){
            $ctr = $ctr + 1;
            echo "Tanggal lahir harus diisi <br/>";
        }
        if(strlen($_POST['tempat_lahir'])==0){
            $ctr = $ctr + 1;
            echo "Tempat lahir harus diisi <br/>";
        }
        if(strlen($_POST['warga_negara'])==0){
            $ctr = $ctr + 1;
            echo "Warga negara harus diisi <br/>";
        }
        if(strlen($_POST['alamat'])==0){
            $ctr = $ctr + 1;
            echo "Alamat harus diisi <br/>";
        }
        if(!str_starts_with($_POST['no_hp'],'+62')){
            $ctr = $ctr + 1;
            echo "No HP harus diawali +62 <br/>";
        }
        if($ctr == 0){
            $namaFile = $_FILES['berkas']['name'];
            $tmp_name = $_FILES['berkas']['tmp_name'];
            $dirUpload = "diupload/";
            $diupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
        
            $_SESSION["berkas"] = $dirUpload.$namaFile;
            $_SESSION["nama_depan_regis"] = $nama_depan;
            $_SESSION["nama_tengah_regis"] = $nama_tengah;
            $_SESSION["nama_belakang_regis"] = $nama_belakang;
            $_SESSION["nik_regis"] = $nik;
            $_SESSION["tanggal_lahir_regis"] = $tanggal_lahir;
            $_SESSION["tempat_lahir_regis"] = $tempat_lahir;
            $_SESSION["warga_negara_regis"] = $warga_negara;
            $_SESSION["email_regis"] = $email;
            $_SESSION["no_hp_regis"] = $no_hp;
            $_SESSION["alamat_regis"] = $alamat;
            $_SESSION["kode_pos_regis"] = $kode_pos;
            $_SESSION["username_regis"] = $username;
            $_SESSION["password1_regis"] = $password1;
            $_SESSION["password2_regis"] = $password2;

            echo "<h1> Registrasi Berhasil </h1>";
            echo "Klik link dibawah ini untuk lanjut";
            echo "<br/>";
            echo "<a href = 'login.php'> Next </a>";
            $flag = 1;
            $_SESSION['flag'] = $flag;  
        }
        else{
            echo "<h1> Registrasi Gagal </h1>";
            echo "Klik link dibawah ini untuk kembali";
            echo "<br/>";
            echo "<a href = 'register.php'> Kembali </a>";  
        }    

        // echo $_SESSION["nama_depan_regis"];
        // echo "<br/>";
        // echo $_SESSION["nama_tengah_regis"];
        // echo "<br/>";
        // echo $_SESSION["nama_belakang_regis"];
        // echo "<br/>";
        // echo $_SESSION["tanggal_lahir_regis"];
        // echo "<br/>";
        // echo $_SESSION["tempat_lahir_regis"];
        // echo "<br/>";
        // echo $_SESSION["warga_negara_regis"];
        // echo "<br/>";
        // echo $_SESSION["email_regis"];
        // echo "<br/>";
        // echo $_SESSION["no_hp_regis"];
        // echo "<br/>";
        // echo $_SESSION["alamat_regis"];
        // echo "<br/>";
        // echo $_SESSION["kode_pos_regis"];
        // echo "<br/>";
        // echo $_SESSION["username_regis"];
        // echo "<br/>";
        // echo $_SESSION["password1_regis"];
        // echo "<br/>";
        // echo $_SESSION["password2_regis"];
        // echo "<br/>";
          
    }
?>