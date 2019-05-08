<? include"header.php"?>	
<?
   extract($_REQUEST);
   
   
?>	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">View Class</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4 text-right'>&nbsp;&nbsp;&nbsp;<a href="add_student.php?batch=<?=$batch ?>&&branch=<?=$branch ?>&&class=<?=$class ?>&&section=<?=$section ?>">Add Student</a>
   </div>
    </div>
    
	<div class='row'>
    <div class='col-md-1'></div>
    <div class='col-md-10'>
    <!--working area--->
    <?
    $qry="select * from students where batch='$batch' and branch='$branch' and class='$class' and section='$section'";
	$res=mysql_query($qry);
   		$res=mysql_query($qry) or die(mysql_error());
   		if(mysql_num_rows($res)==false)
   		{
		?>
		<div class='row'>
		<div class='col-md-3' ></div>
		<div class='col-md-6' well> No Srudent Exist</div>
		<div class='col-md-3' ></div>	
		</div>
		<?
		}else
		{
?>	
<div class='row'>
<div class='col-md-12'>
  <table class="table table-bordered table-striped table-hover" >
    <thead>
      <tr>
        <th>Name</th>
        <th>University Roll No</th>
        <th>Batch</th>
        <th>Branch</th>
        <th>Class</th>
        <th>Section</th>
        <th>Marks</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
			
		<?
		}
		while($arr=mysql_fetch_assoc($res))
		{
			extract($arr);
		
		
		?>	
      <tr>
        <td><?= $name ?></td>
        <td><?= $roll_no ?></td>
        <td><?= $batch?>-<?= $batch+4 ?></td>
        <td><?= $branch?></td>
        <td><?= $class?></td>
        <td><?= $section?></td>
        <td><a style='text-decoration:none' href='marks.php?id=<?= $id ?>'>Marks</a></td>
        <td><a style='text-decoration:none' href='delete_student.php?id=<?= $id ?>'>Delete</a></td>
        <td><a style='text-decoration:none' href='edit_student.php?id=<?= $id ?>'>Edit</a></td>
      </tr>
		<?	
		}
		?>
	
    </tbody>
  </table>
  </div>
  </div>


    
    
    
    <!--working area--->
    </div>
    <div class='col-md-1'></div>
    </div>

    <br><br>
<? include"footer.php"?>    
    
    
    
    
