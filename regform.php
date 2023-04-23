<?php include_once('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
</head>
<body>
    <div class="main-container">
        <div class="inputs">
        <h2>Regisztráció</h2>
            <form class="form" action="regist.php" method="POST">
                <input type="text" placeholder="Teljes név:" required name="name" autocomplete="off">
                <br>
                <br>
                <input type="text" placeholder="Felhasználónév" required name="username" autocomplete="off">
                <br>
                <br>
                <input type="email" placeholder="E-mail" required name="email" autocomplete="off">
                <br>
                <br>
                <input type="password" placeholder="Jelszó:" required name="passwd_1">
                <br>
                <br>
                <input type="password" placeholder="Jelszó megerősítése:" required name="passwd_2">
                <input id="reg-btn" class="login-btn" type="submit" value="Regisztráció" name="reg-btn">
                <br>
                <br>
                <a href="">Ha már van fiókod itt bejelentkezhetsz</a>
            </form>
        </div>
    </div>
</body>
</html> 