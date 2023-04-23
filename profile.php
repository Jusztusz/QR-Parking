<?php
     include("connection.php");
     if(!isset($_COOKIE['login'])){
         header("location: login.php");
     }else{
         session_start();
         }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Profil</title>
</head>
<body>
    <?php include("nav.php"); ?>
    <div class="main">
        <div class="personal">
            <p>Profil</p>
            <ul class="personal-list">
                <li>Felhasználó: <?php echo $_SESSION['username']; ?> </li>
                <li>E-mail: </li>
                <li>Járművek: </li>
            </ul>
        </div>
        <div class="add-car">
            <form action="add.php" method="post">
            <p>Jármű hozzáadása</p>
            <select class="type" name="type" id="" required>
                <option value="0">Válasszon a listából!</option>
                <option value="1">Személyautó</option>
                <option value="2">Motorkerékpár</option>
            </select>
            <br>
            <br>
            <input type="text" placeholder="Rendszám" name="rendszam" required>
            <br>
            <br>
            <input type="text" placeholder="Márka" name="marka" required>
            <br>
            <input type="submit" value="Hozzáadás+" name="sub-btn" class="btn">
            </form>
        </div>
        <p class="owncars">Járművek</p>
        <table> 
            <tr>
                <th>Márka</th>
                <th>Rendszám</th>
                <th>QR</th>
            </tr>
            <tr>
            <?php
             $uname = $_SESSION['username']; 
             $idSql = "select id from users where usr='".$uname."'limit 1";
             $idResult = $conn->query($idSql);   
             if ($idResult->num_rows > 0) {
                 while($row = $idResult->fetch_assoc()) {
                     foreach($row as $idRow){
                     }
                     
                 }
             } 
            
            $sql = "SELECT marka, rendszam FROM cars WHERE tulaj_id=".$idRow."";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                   
                   echo "
                        <tr>
                        <td class='markatd'>".$row['marka']."</td>
                        <td class='rsztd' id='qrId'>".$row['rendszam']."</td>
                        <td><img src='https://qrickit.com/api/qr.php?d=".$row['rendszam'],"alt='qr'></td>
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