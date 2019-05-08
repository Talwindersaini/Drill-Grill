<?
include"database.php";
if(isset($_POST['submit']))
{
	
	extract($_REQUEST);
 		
		$qry="insert into students (name,class,roll_no,section,branch,batch) values ('$name','$class','$roll_no','$section','$branch','$batch')";
		$res=mysql_query($qry) or die(mysql_error());
		header("location:view_class.php?branch=$branch&&batch=$batch&&class=$class&&section=$section&&err=32err=19");
		exit();
		
   		
   		
}
else
{
	header('location:view_class.php');
	exit();
}
?>
