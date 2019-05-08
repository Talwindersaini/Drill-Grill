<?
include"header.php"
?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">View Class</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4 text-right'><a style='text-decoration:none;' href='create_class.php'>Create Class</a></div>
    </div>
    
	<!--working area--->
<?
   		if(!isset($_POST['submit']))
   		{
			$qry="select distinct batch, branch, class, section from students";
		
   		$res=mysql_query($qry) or die(mysql_error());
   		if(mysql_num_rows($res)==false)
   		{
		?>
		<div class='row'>
		<div class='col-md-3' ></div>
		<div class='col-md-6' well> No Class Exist</div>
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
        <th>Batch</th>
        <th>Branch</th>
        <th>Class</th>
        <th>Section</th>
        <th>View</th>
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
        <td><?= $batch?>-<?= $batch+4 ?></td>
        <td><?= $branch?></td>
        <td><?= $class?></td>
        <td><?= $section?></td>
        <td><a style='text-decoration:none' href='view_class.php?branch=<?= $branch ?>&&batch=<?= $batch ?>&&class=<?= $class ?>&&section=<?= $section ?>'>View</a></td>
        <td><a style='text-decoration:none' href='delete_class.php?branch=<?= $branch ?>&&batch=<?= $batch ?>&&class=<?= $class ?>&&section=<?= $section ?>'>Delete</a></td>
        <td><a style='text-decoration:none' href='edit_class.php?branch=<?= $branch ?>&&batch=<?= $batch ?>&&class=<?= $class ?>&&section=<?= $section ?>'>Edit</a></td>
      </tr>
		<?	
		}
		?>
	
    </tbody>
  </table>
  </div>
  </div>



<?
}
?>    
    
    
    
    
    <!--working area--->
    
    
<? include"footer.php"?>    
    
    
    
    
