<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Edit Class</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
    <!--working area--->
    <form role='form' class='well form-horizontal' method='post' action='eclass.php'>
	<h3 style='margin-top:0'>Edit Class</h3>
   <?
   extract($_REQUEST);



$_SESSION['branch']=$branch;	
$_SESSION['batch']=$batch;	
$_SESSION['class']=$class;	
$_SESSION['section']=$section;	
	
   //print_r($_SESSION);
   $qry="select * from students where batch='$batch' and branch='$branch' and class='$class' and section='$section'";
   $res=mysql_query($qry);
   $arr=mysql_fetch_assoc($res);
   extract($arr);
   
   ?>

	<div class='form-group'>
	<label>Batch<sup>*</sup></label>
	<select name='batch' class='form-control'>
	<option value='<?= $batch ?>'><?= $batch ?>-<?= $batch+4 ?></option>
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
	<div class='col-md-6'><input type='submit' name='submit' class='btn btn-primary' value='Update' style='width:100%'></div>
	<div class='col-md-3'></div>
   </div>

   

   
   
    </form>
    <!--working area--->
    </div>
    <div class='col-md-2'></div>
    </div>

    
<? include"footer.php"?>    
    
    
    
    
