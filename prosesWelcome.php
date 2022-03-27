<?php
    session_start();
    if(isset($_SESSION['flag'])){
        header('Location: welcome.php');
    } 
    else{
        header('Location: login.php');
    }
?>