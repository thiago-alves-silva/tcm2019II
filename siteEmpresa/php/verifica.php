<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location: ../home.php');
        exit();
    }
?>