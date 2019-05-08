<?
include"database.php";
include"checklogin.php";
unset($_SESSION['uname']);
unset($_SESSION['pass']);
header('location:../index.php');
?>
