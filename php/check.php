<?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){
    }
    else {
        header('Location: ../../login.php');
        die();
    }
?>