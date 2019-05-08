<?
		include"database.php";
   		extract($_REQUEST);
   		$qry="select * from students where id=$id";
   		$res=mysql_query($qry) or die(mysql_error());
		$arr=mysql_fetch_assoc($res);
		extract($arr);
   		echo $qry="delete from students where id=$id";
   		$res=mysql_query($qry) or die(mysql_error());
   		header("location:view_class.php?branch=$branch&&batch=$batch&&class=$class&&section=$section&&err=32");
   				
?>
