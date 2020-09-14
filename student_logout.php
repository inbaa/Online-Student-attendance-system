<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["admno"]);
unset($_SESSION["logged_in"]);  
session_destroy();
header("Location:index.php");
?>

