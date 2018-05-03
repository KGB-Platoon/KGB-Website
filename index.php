<!-- SERVER -->
<?php
    session_start();
    if (isset($_SESSION['id'])){
        $dbId = $_SESSION['id'];
        $dbLogin = $_SESSION['login'];
    }
    else {
        header('Location: login.php');
        die();
    }
?>
<!-- CLIENT -->