<?
include"database.php";
if(isset($_POST['submit']))
{
	
	extract($_REQUEST);
	//print_r($_REQUEST);
	
		if($ipd=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		
		if($rfw=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($ses=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($opw=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		
		if($mpw=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($dme=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($pts=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($dep=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($ins=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($pde=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($ppt=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		
		
		if($pre=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		if($dct=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		
		if($ccd=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		
		if($rfc=='')
		{
			header('location:intmarks.php?err=11');
			exit();
		}
		



		
   		
   		$qry="insert into `internal marks` (student_id,rfc,ccd,ipd,rfw,ses,opw,mpw,dme,pts,dep,ins,pde,ppt,pre,dct) values ('$id','$rfc','$ccd','$ipd','$rfw','$ses','$opw','$mpw','$dme','$pts','$dep','$ins','$pde','$ppt','$pre','$dct') ";
   		$res=mysql_query($qry) or die(mysql_error());
   		header("location:intmarks.php?err=42&&id=$id");
		exit();

}
else
{
	header('location:intmarks.php');
	exit();
}
?>
