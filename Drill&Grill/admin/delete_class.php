<?
		include"database.php";
   		extract($_REQUEST);
   		echo $qry="delete from students where batch='$batch' and branch='$branch' and class='$class' and section='$section'";
   		$res=mysql_query($qry) or die(mysql_error());
   		header('location:vclass.php?err=32');
   				
?>
