<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Edit Student</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
    <!--working area--->
    <form role='form' class='well form-horizontal' method='post' action='enter_student.php'>
	<h3 style='margin-top:0'>Add Student</h3>
   <?
   extract($_REQUEST);
   ?>
	<input type='hidden' name='id' '>
	<div class='form-group'>
	<label>Name<sup>*</sup></label>
	<input type='text' name='name'  class='form-control'>
	</div>


	<div class='form-group'>
	<label>University Roll No<sup>*</sup></label>
	<input type='text' name='roll_no'  class='form-control'>
	</div>


	<div class='form-group'>
	<label>Semester<sup>*</sup></label>
	<select name='semester' class='form-control'>
	<option value='8'>8</option>
	<option value='7'>7</option>
	<option value='6'>6</option>
	<option value='5'>5</option>
	<option value='4'>4</option>
	<option value='3'>3</option>
	<option value='2'>2</option>
	<option value='1'>1</option>
	</select>
	</div>


	<div class='form-group'>
	<label>Batch<sup>*</sup></label>
	<select name='batch' class='form-control'>
	<option value=<?= $batch ?>><?= $batch ?>-<?= $batch+4 ?></option>
	<?
	for($i=date('Y');$i>=1956;$i--)
	{
	?>
	<option value='<?= $i ?>'><?= $i ?>-<?= $i+4 ?></option>
	<?
	}
	?>
	</select>
	</div>
	<div class='form-group'>
	<label>Branch<sup>*</sup></label>
	<select  class='form-control'  name='branch'>
	<option value='<?= $branch ?>'><?= $branch ?></option>
	<option value='APPLIED SCIENCES'>APPLIED SCIENCES</option>
	<option value='CIVIL ENGINEERING'>CIVIL ENGINEERING</option>
	<option value='ELECTRICAL ENGINEERING'>ELECTRICAL ENGINEERING</option>
	<option value='MECHANICAL ENGINEERING'>MECHANICAL ENGINEERING</option>
	<option value='ELECTRONICS AND COMMUNICATION ENGINEERING'>ELECTRONICS AND COMMUNICATION ENGINEERING</option>
	<option value='COMPUTER SCIENCE ENGINEERING'>COMPUTER SCIENCE ENGINEERING</option>
	<option value='INFORMATION TECHNOLOGY'>INFORMATION TECHNOLOGY</option>
	<option value='PRODUCTION ENGINEERING'>PRODUCTION ENGINEERING</option>
	</select>
   </div>
	
	
	<div class='form-group'>
	<label>Class<sup>*</sup></label>
	<select  class='form-control'  name='class'>
	<option value='<?= $class ?>'><?= $class ?></option>
	<option value='D4CSE'>D4CSE</option>
	<option value='D4IT'>D4IT</option>
	<option value='D4ME'>D4ME</option>
	<option value='D4EE'>D4EE</option>
	<option value='D4ECE'>D4ECE</option>
	<option value='D4PE'>D4PE</option>
	<option value='D4APPSC'>D4APPSC</option>
	<option value='D4CE'>D4CE</option>
	
	<option value='D4CSE'>D3CSE</option>
	<option value='D4IT'>D3IT</option>
	<option value='D4ME'>D3ME</option>
	<option value='D4EE'>D3EE</option>
	<option value='D4ECE'>D3ECE</option>
	<option value='D4PE'>D3PE</option>
	<option value='D4APPSC'>D3APPSC</option>
	<option value='D4CE'>D3CE</option>
	
	<option value='D4CSE'>D2CSE</option>
	<option value='D4IT'>D2IT</option>
	<option value='D4ME'>D2ME</option>
	<option value='D4EE'>D2EE</option>
	<option value='D4ECE'>D2ECE</option>
	<option value='D4PE'>D2PE</option>
	<option value='D4APPSC'>D2APPSC</option>
	<option value='D4CE'>D2CE</option>
	
	<option value='D4CSE'>D1CSE</option>
	<option value='D4IT'>D1IT</option>
	<option value='D4ME'>D1ME</option>
	<option value='D4EE'>D1EE</option>
	<option value='D4ECE'>D1ECE</option>
	<option value='D1PE'>D1PE</option>
	<option value='D1APPSC'>D1APPSC</option>
	<option value='D1CE'>D1CE</option>
	
	</select>
	</div>
	<div class='form-group'>
	<label>Section<sup>*</sup></label>
	<select name='section' class='form-control'>
	<option value='<?= $section ?>'><?= $section ?></option>
	<option value='A'>A</option>
	<option value='B'>B</option>
	<option value='C'>C</option>
	<option value='D'>D</option>
	</select>
	</div>
	

   <div class='form-group'>
	<div class='col-md-3'></div>
	<div class='col-md-6'><input type='submit' name='submit' class='btn btn-primary' value='Enter' style='width:100%'></div>
	<div class='col-md-3'></div>
   </div>

   

   
   
    </form>
    <!--working area--->
    </div>
    <div class='col-md-2'></div>
    </div>

    
<? include"footer.php"?>    
    
    
    
    
