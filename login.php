<?php include_once('nav.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
</head>
<body>
    <div class="main-container">
        <div class="inputs">
        <img class="kolbi" src="/img/kolbi.png" alt="">
        <h2>Bejelentkezés</h2>
        <br>
            <form class="form" action="connection.php" method="POST">
                <input type="text" required id="name" class="input" name="username" placeholder="Felhasználónév: " autocomplete="off">
                <br>
                <br>
                <input type="password" required class="input" name="passwd" placeholder="Jelszó: ">
                <br>
                <input class="login-btn" type="submit" value="Bejelentkezés" name="login-btn" >
                <br>
                <br>
                <a href="signup">Ha még nincs fiókod itt regisztrálhatsz!</a>
            </form>
        </div>
    </div>
</body>
</html>