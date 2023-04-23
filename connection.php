<?php
  //Megadjuk az adatbázis eléréséhez szükséges adatokat szerver/host,felhasználó nevet jelszót és az adatbázis nevét amit használni szeretnénk
  $host = "127.0.0.1";
  $user = "root";
  $password = "";
  $db = "parking";
  $conn = mysqli_connect($host,$user,$password,$db); //Megpróbálunk kapcsolatot létesíteni a MySQL szerverrel
  mysqli_select_db($conn,$db); //Kiválasztjuk, hogy melyik adatbázist használjuk alapértelmezetként a lekérdezések során. Megadjuk a csatlakozás változóját és az adatbázis változóját
  //Meghatározzuk, hogy a bejelentkezésnél szükséges adatok deklarálva vannak-e
  if (isset($_POST['username'])) {
    $uname = $_POST['username'];
    $password = $_POST['passwd'];
    $sql = "select * from users where usr='".$uname."' AND pwd='".hash('sha512', $password)."'limit 1";  //Az input mezőbe bevitt adatokat le ellenőrizzük, hogy az adatbázisban szerepelnek-e megfelelő párok(név-jelszó)
    $result = mysqli_query($conn,$sql); //Lekérdezés végrehajtása az adatbázisban. 2 értéket adunk meg. -Első: kapcsolat létrehozásának változója -Második: az sql lekérdezés változója

    if (mysqli_num_rows($result) == 1) { //Lekérjük az eredményhalmaz sorait és egy elágazásba tesszük. Értelem szerűen csak 1 megfelelő kombináció lehet ezért az if ágban végrehajtjuk a bejelentkezést
      session_start();
      setcookie("login","1",time()+3600);
      $_SESSION["username"] = $_POST["username"];
      $_COOKIE["login"] = TRUE;
      header('Location: index.php');
      exit();
      //echo "Kajak megy gec :D"," | ",$uname;
    }else {               //Else ágban nem engedéjezzük a bejelentkezés
      header('Location: login.php');
      //exit();
    }
  }
 ?>
