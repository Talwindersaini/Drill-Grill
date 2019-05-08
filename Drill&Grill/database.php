<?
ob_start();
session_start();
define('users','root');
define('password','saini');
define('host','localhost');
define('name','training');
mysql_connect(host,users,password) or die (mysql_error());
mysql_select_db(name) or die (mysql_error());
?>
<?php 
 error_reporting(E_ALL); 
?>
