<?
include"database.php";
   		
   		extract($_REQUEST);
   		echo $qry="delete from evaluators where id='$id'";
   		$res=mysql_query($qry) or die(mysql_error());
   		header('location:veval.php?err=17');
   		
   		
   		 
		
?>
