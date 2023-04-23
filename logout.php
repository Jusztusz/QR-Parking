<?php
session_start();
setcookie("login","1",time()+1);
session_unset();
session_destroy();

header("location: index.php");
?>