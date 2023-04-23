<?php
    if(isset($_COOKIE['login'])){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Főoldal</title>
</head>
<body>
    <div class="main">
        <?php include("nav.php"); ?>
        <h2>oasis parking</h2>
        <div class="des">
            Egy egyszerű online parkolórendszer.<br>Regisztráció után azonnal megkapja belépőjegyét
            , amit letölthet mobiljára vagy bejelentkezés után a profilján is megtalálja.
        </div>
        <div class="btn-box">
            <button class="btn login">Bejelentkezés</button>
            <button class="btn reg">Regisztráció</button>
        </div>
    </div>
    <footer>
        <img class="nje-logo" src="nje-logo.png" alt="" srcset="">
    </footer>
</body>
</html>