<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Create Coordinators</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
    <!--working area--->
    <form role='form' class='well form-horizontal' method='post' action='cdept.php'>
	<h3 style='margin-top:0'>Create Coordinators</h3>
   


	<div class='form-group'>
	<label>First Name<sup>*</sup></label>
	<input type='text' placeholder='First Name' name='fname' class='form-control'>
	</div>
	<div class='form-group'>
	<label>Last Name<sup>*</sup></label>
	<input type='text' placeholder='Last Name' name='lname' class='form-control'>
	</div>
	<div class='form-group'>
	<label>Email<sup>*</sup></label>
	<input type='text' placeholder='Email' name='email' class='form-control'>
	</div>




   <div class='form-group'>
   <label >Department<sup>*</sup></label>
   <select  class='form-control'  name='dept'>
	<option value=''>--------------</option>
	<option value='APPLIED SCIENCES'>APPLIED SCIENCES</option>
	<option value='CIVIL ENGINEERING'>CIVIL ENGINEERING</option>
	<option value='ELECTRICAL ENGINEERING'>ELECTRICAL ENGINEERING</option>
	<option value='MECHANICAL ENGINEERING'>MECHANICAL ENGINEERING</option>
	<option value='ELECTRONICS AND COMMUNICATION ENGINEERING'>ELECTRONICS AND COMMUNICATION ENGINEERING</option>
	<option value='COMPUTER SCIENCE ENGINEERING'>COMPUTER SCIENCE ENGINEERING</option>
	<option value='INFORMATION TECHNOLOGY'>INFORMATION TECHNOLOGY</option>
	<option value='PRODUCTION ENGINEERING'>PRODUCTION ENGINEERING</option>
	<option value='BUSINESS ADMINISTRATION'>BUSINESS ADMINISTRATION</option>
	<option value='COMPUTER APPLICATIONS'>COMPUTER APPLICATIONS</option>
   </select>
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
    
    
    
    
