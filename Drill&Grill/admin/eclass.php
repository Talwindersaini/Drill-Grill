<?
include"database.php";
if(isset($_POST['submit']))
{
	
	extract($_REQUEST);

$old_branch=$_SESSION['branch'];	
$old_batch=$_SESSION['batch'];	
$old_class=$_SESSION['class'];	
$old_section=$_SESSION['section'];	
	
		
		
		
		$qry="update students set batch='$batch' , branch='$branch' , class='$class' , section='$section'   where batch='$old_batch' and branch='$old_branch' and class='$old_class' and section='$old_section'";
		$res=mysql_query($qry) or die(mysql_error());
		
		
		print_r($_SESSION);
		header('location:vclass.php?err=19');
		exit();
		
   		
   		
}
else
{
	header('location:edit_class.php');
	exit();
}
?>
