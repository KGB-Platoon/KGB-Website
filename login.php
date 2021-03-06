<!-- SERVER -->
<?php

    session_start();

    if(isset($_POST['submit'])){
        
        $passedLogin = strip_tags($_POST['login']);
        $passedPassword = strip_tags($_POST['password']);
        
    }
?>
<!-- CLIENT -->
<!DOCTYPE html>
<html lang="en" kgb-id="login">
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
<body class="login">
    <div class="login_wrapper">
        <!--<video class="login_video_background" src="./static/videos/video1.mp4" autoplay></video>
        <div class="login_stripe"></div>-->
        <div class="login_window">
            <img class="login_logotype" src="./static/images/kgb-logotype1.png">
            <form class="login_form" method="POST" action="login.php">
                <h1>Login to KGB system</h1>
                <table class="login_form_table">
                    <tbody>
                        <tr>
                            <td><h2>Agent ID</h2></td>
                            <td><input name="login" class="login_form_enter" type="text" placeholder="Enter ID"></td>
                        </tr>
                        <tr>
                            <td><h2>Secret password</h2></td>
                            <td><input name="password"class="login_form_enter" type="password" placeholder="Enter password"></td>
                        </tr>
                    </tbody>
                </table>
                <a class="login_form_forget">Don't remember your password?</a>
                <a class="login_form_forget">Don't remember your ID?</a>
                <input name="submit" class="login_form_proceed" type="submit" value="Proceed">
            </form>
        </div>
    </div>
</body>
</html>