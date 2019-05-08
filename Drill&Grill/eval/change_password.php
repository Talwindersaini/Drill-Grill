<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Change Password</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row' style='margin-top:100px'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
    <!--working area--->
<form role='form' class='well form-horizontal' method='post' action='chanpass.php'>
	<h3 style='margin-top:0'>Change Password</h3>
	<div class='form-group'>
	<label>Old Password<sup>*</sup></label>
	<input type='password' placeholder='Old Password' name='oldpass' class='form-control'>
	</div>
	
	<div class='form-group'>
	<label>New Password<sup>*</sup></label>
	<input type='password' placeholder='New Password' name='newpass' class='form-control'>
	</div>
	
	<div class='form-group'>
	<label>Confirm Password<sup>*</sup></label>
	<input type='password' placeholder='Confirm Password' name='conpass' class='form-control'>
	</div>

   <div class='form-group'>
	<div class='col-md-3'></div>
	<div class='col-md-6'><input type='submit' name='submit' class='btn btn-primary' value='Create' style='width:100%'></div>
	<div class='col-md-3'></div>
   </div>
   
</form>

    
    
    
    
    
    <!--working area--->
    </div>
    <div class='col-md-2'></div>
    </div>

    
<? include"footer.php"?>    
    
    
    
    
