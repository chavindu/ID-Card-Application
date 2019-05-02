<?php
session_start();
$_SESSION['login']['s'] = 0;
header("location:login.php");
?>