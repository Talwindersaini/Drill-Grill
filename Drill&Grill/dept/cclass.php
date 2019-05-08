<?
include"database.php";

if(isset($_POST['submit']))
{
	
	extract($_REQUEST);
	//print_r($_REQUEST);
	
		if($batch=='')
		{
			header('location:create_class.php?err=21');
			exit();
		}
		if($branch=='')
		{
			header('location:create_class.php?err=22');
			exit();
		}
		if($class=='')
		{
			header('location:create_class.php?err=23');
			exit();
		}
		if($section=='')
		{
			header('location:create_class.php?err=24');
			exit();
		}
		
		
   		
   		
   		/*$qry="select * from classes where and class='$class' batch='$batch' and branch='$branch'";
   		$res=mysql_query($qry);
   		if(mysql_num_rows($res)!=false)
   		{
			header('location:create_class.php?err=30');
			exit();
		}
   		*/
   		
   		
   		
   		$csv=$_FILES['class_csv']['tmp_name'];
		
		move_uploaded_file("csv/".$csv,"$csv");
		$file = fopen($csv,"r");
		$csv_file= fgetcsv($file);
		
		
		
		
		
		?>
		<pre>
		<?
		while(!feof($file))
        {
		
		$student=fgetcsv($file);
		print_r($student);
		$qry="insert into students (branch,batch,class,section,roll_no,m_obt,m_max,regular,subject,semester,name) values('$branch','$batch','$class','$section','$student[0]','$student[7]','$student[6]','$student[5]','$student[2]','$student[3]','$student[1]')";
		$res=mysql_query($qry) or die(mysql_error());
		
		}
		
		

		  header('location:create_class.php?err=31');
		  exit();
		
		


}
else
{
	header('location:create_class.php');
	exit();
}
?>
