<?
include"database.php";
if(isset($_POST['submit']))
{
if($_POST['username']=='')
{
header('location:index.php?err=1');
exit();
}
if($_POST['password']=='')
{
header('location:index.php?err=2');
exit();
}
extract($_POST);

$qry="select * from admin where uname='$username' and pass='$password'";
$res=mysql_query($qry) or die(mysql_error());
if(mysql_num_rows($res))
{
$arr=mysql_fetch_assoc($res) or die(mysql_error());
extract($arr);
$_SESSION['uname']=$uname;
$_SESSION['pass']=$pass;
$_SESSION['role']='dept';
header('location:home.php');
}
else
{
header('location:index.php?err=3');
exit();
}

}
else
{
header('location:index.php');
exit();
}


?>
