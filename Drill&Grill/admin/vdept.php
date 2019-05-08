<?
include"header.php"
?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">View Coordinators</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4 text-right'><a style='text-decoration:none;' href='create_dept.php'>Create Coordinators</a></div>
    </div>
    
	<!--working area--->
<?
   		if(!isset($_POST['submit']))
   		{
			$qry="select * from coordinator";
		
   		$res=mysql_query($qry) or die(mysql_error());
   		if(mysql_num_rows($res)==false)
   		{
		?>
		<div class='row'>
		<div class='col-md-3' ></div>
		<div class='col-md-6' well> No Coordinator Exist</div>
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
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Department</th>
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
        <td><?= $fname?></td>
        <td><?= $lname?></td>
        <td><?= $uname?></td>
        <td><?= $pass?></td>
        <td><?= $email?></td>
        <td><?= $dept?></td>
        <td><a style='text-decoration:none' href='ddept.php?id=<?= $id ?>'>Delete</a></td>
        <td><a style='text-decoration:none' href='edit_dept.php?id=<?= $id ?>'>Edit</a></td>
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
    
    
    
    
