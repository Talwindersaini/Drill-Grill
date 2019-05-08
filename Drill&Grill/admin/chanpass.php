<? include"database.php" ?>
<?
if(isset($_POST['submit']))
{
	print_r($_REQUEST);
	extract($_REQUEST);
	$uname= $_SESSION['uname'];
	$pass= $_SESSION['pass'];
	$qry="select * from admin where uname='$uname' and pass='$pass'";
	$res=mysql_query($qry) or die(mysql_error());
	$arr=mysql_fetch_assoc($res);
	if($arr['pass']==$oldpass)
	{
		
		if($newpass==$conpass)
		{
			$qry="update admin set pass='$newpass' where pass='$oldpass' ";
			$res=mysql_query($qry) or die(mysql_error());
			header('location:change_password.php?err=6');
		}
		else
		{
			header('location:change_password.php?err=8');
		}
	
	}
	else
	{
		header('location:change_password.php?err=7');
	}
	

	
}
else
{
	header('location:home.php?err=5');
}

?>
