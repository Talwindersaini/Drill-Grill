<?
include"database.php";
if(isset($_POST['submit']))
{
	
	extract($_REQUEST);
	print_r($_REQUEST);
	
	
		if($fname=='')
		{
			header('location:create_dept.php?err=11');
			exit();
		}
		if($lname=='')
		{
			header('location:create_dept.php?err=12');
			exit();
		}
		if($email=='')
		{
			header('location:create_dept.php?err=13');
			exit();
		}
		if($dept=='')
		{
			header('location:create_dept.php?err=14');
			exit();
		}
		if($uname=='')
		{
			header('location:create_dept.php?err=18');
			exit();
		}
		
		
		
		
		$qry="update coordinator set fname='$fname' , email='$email' , lname='$lname' , dept='$dept' , uname='$uname'  where id=$id";
		$res=mysql_query($qry);
		header('location:vdept.php?err=19');
		exit();
		
   		
   		
}
else
{
	header('location:edit_dept.php');
	exit();
}
?>
