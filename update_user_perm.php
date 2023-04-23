<?php
include("dbcon.php");
$conn = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($conn,$db);
if (isset($_POST['approve'] )){
    $query = "UPDATE users SET engedely='OK' WHERE usr='".$_POST['usernameUpdate']."'";
  	mysqli_query($conn, $query);
    header('location: controll_panel.php');
}
if(isset($_POST['removeUser'])){
    if (is_dir($_POST['usernameUpdate'])) {
        rmdir($_POST['usernameUpdate']);
    }
    $query = "DELETE FROM users WHERE usr='".$_POST['usernameUpdate']."'";
    mysqli_query($conn, $query);
    header('location: controll_panel.php');
}
if (isset($_POST['lockUser'] )){
    $query = "UPDATE users SET engedely='NO' WHERE usr='".$_POST['usernameUpdate']."'";
  	mysqli_query($conn, $query);
    header('location: controll_panel.php');
}

?>