<?php
    include("connection.php");
    if(!isset($_COOKIE['login'])){
        header("location: login.php");
    }else{
        session_start();
        if(!($_SESSION['rank_id'] == "4")){
            header("location:user.php");
        }
    }
    include("nav.php");
    
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="controll_panel.css">
<div class="admin-main">
    <div class="left-side">
       <div class="left-hero"><h2>Admin Panel</h2></div>

        <div class="admin-panel-list">
            <ul class="controll-list">
                <li><a href="#">Felhasználó kezelés</a></li>
                <li><a href="#">Frissítések</a></li>
                <li><a href="#">Közlemény</a></li>
                <li><a href="#">Rendszer figyelő</a></li>
            </ul>
        </div>

    </div>

    <div class="right-side">
        <div class="hero-box">
        <h2 style="margin-top: 80px; margin-left: 10px; color:white;">Felhasználók kezelése <b>|</b></h2>
            <form action="update_user_perm.php" method="post">
            <input class="usernameUpdate" type="text" name="usernameUpdate" placeholder="Felhasználónév">
            <button class='approve' type='submit' name='approve'><img src='/img/check.png' style='width: 30px;'></button>
            <button class='removeUser' type='submit' name='removeUser'><img src='img/delete.png' style='width: 30px;'></button>
            <button class='lockUser' type='submit' name='lockUser'><img src='img/lock.png' style='width: 30px;'></button>
            </form>
        </div>
        <table>
            <tr>
                <th style="border-radius: 22px 0px 0px 0px;">Felhasználónév</th>
                <th>Teljes név</th>
                <th>Rang</th>
                <th>Regisztrált</th>
                <th></th>
                <th style="padding-right: 15px ;border-radius: 0px 22px 0px 0px;">Engedély</th>
            </tr>
            <tr>
            <?php 
            
            $sql = "SELECT usr, teljes_nev FROM users ORDER BY datum DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                echo "<tr>
                      <td class='fullName'>".$row['rendszam']."</td>
                      <td class='userName'>".$row['marka']."</td>
                      <td></td>
                      </tr>";  
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
</div>
    </body>
</html>
