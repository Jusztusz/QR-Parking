<?php
session_start();

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "parking";
$conn = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($conn,$db);

if (isset($_POST['sub-btn'])) {

  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $marka = mysqli_real_escape_string($conn, $_POST['marka']);
  $rendszam = mysqli_real_escape_string($conn, $_POST['rendszam']);

  $uname = $_SESSION['username']; 
  $idSql = "select id from users where usr='".$uname."'limit 1";
  $idResult = $conn->query($idSql);   
  if ($idResult->num_rows > 0) {
      while($row = $idResult->fetch_assoc()) {
          foreach($row as $tulaj_id){
          }
          
      }
  } 

$query = "INSERT INTO cars(tipus, marka, rendszam,  tulaj_id)
  			  VALUES('$type', '$marka', '$rendszam','$tulaj_id')";
  	mysqli_query($conn, $query);
  	header('Location: profile.php');
}
?>