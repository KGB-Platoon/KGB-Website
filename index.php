<!-- SERVER -->
<?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){
    }
    else {
        header('Location: login.php');
        die();
    }
?>
<!-- CLIENT -->
<!DOCTYPE html>
<html lang="en" kgb-id="main">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>= KGB Platoon =</title>
    <!-- additional libraries -->
    <script src="./static/lib/jquery.js"></script>
    <!-- own include -->
    <script src="./dist/scripts/main.min.js"></script>
    <link rel="stylesheet" href="./dist/styles/style.min.css">
</head>
<body class="main">
    <header>header</header>
    <section id="here"></section>
    <footer>footer</footer>
</body>
</html>