<?php
session_start();

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "parking";
$conn = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($conn,$db);


if (isset($_POST['reg-btn'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['passwd_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['passwd_2']);

  	$hash_password = hash('sha512', $password_1);
  	$query = "INSERT INTO users(usr, teljes_nev, email, pwd)
  			  VALUES('$username', '$name', '$email', '$hash_password')";
  	mysqli_query($conn, $query);
    mkdir("C:/xampp/htdocs/qr/".$username,0777);
    header('Location: index.php');
    exit();
  }