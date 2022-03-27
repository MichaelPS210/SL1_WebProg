<?php
    session_start();
    if(isset($_POST['login'])){
        if(isset($_SESSION)){
            if(($_POST['usernameLogin'] == $_SESSION['username_regis']) && ($_POST['passwordLogin'] == $_SESSION['password1_regis'])){
                echo "<h1> Login Berhasil </h1>";
                echo "Klik link dibawah ini untuk lanjut";
                echo "<br/>";
                echo "<a href = 'home.php'> Next </a>";  
            }
            else{
                echo "<h1> Login Gagal </h1>";
                echo "Klik link dibawah ini untuk kembali";
                echo "<br/>";
                echo "<a href = 'login.php'> Kembali </a>";  
            }
        }
    }

?>