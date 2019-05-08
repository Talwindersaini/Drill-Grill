<?
include"database.php";
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

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
		
		
		
		
		$username=$fname.$lname.date('ym');
		$password=randomPassword();
   		
   		
   		
   		$qry="select * from coordinator where uname='$username'";
   		$res=mysql_query($qry);
   		if(mysql_num_rows($res)!=false)
   		{
			header('location:create_dept.php?err=15');
			exit();
		}
   		
   		
   		
   		  $qry="insert into coordinator (fname,lname,dept,uname,pass,email) values('".ucfirst($fname)."','".ucfirst($lname)."','$dept','$username','$password','$email')";
		  $res=mysql_query($qry) or die(mysql_error());
		  header('location:create_dept.php?err=16');
		  exit();
		
		
		


}
else
{
	header('location:create_dept.php');
	exit();
}
?>
