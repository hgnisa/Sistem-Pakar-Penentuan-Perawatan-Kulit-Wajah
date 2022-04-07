<?php
session_start();

include_once ('proseslogin.php');
$user = new userController();

$logout = $user->user_logout();
header("location: login.php");
?>