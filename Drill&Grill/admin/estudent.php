<?
include"database.php";
if(isset($_POST['submit']))
{
	
	extract($_REQUEST);

$old_branch=$_SESSION['branch'];	
$old_batch=$_SESSION['batch'];	
$old_class=$_SESSION['class'];	
$old_section=$_SESSION['section'];	


		
		$qry="update students set name='$name',roll_no='$roll_no', batch='$batch' , branch='$branch' , class='$class' , section='$section'   where id=$id";
		$res=mysql_query($qry) or die(mysql_error());
		header("location:view_class.php?branch=$old_branch&&batch=$old_batch&&class=$old_class&&section=$old_section&&err=32err=19");
		exit();
		
   		
   		
}
else
{
	header('location:view_class.php');
	exit();
}
?>
