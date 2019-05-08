<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
	  <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Class</li>
        <li class="active">Marks</li>
        <li class="active">Internal Marks</li>
      </ul>
      </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row' style='margin-top:100px'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
    <!--working area--->
    <?
    extract($_REQUEST);
     $student_id=$id;
    $qry="select * from `internal marks` where student_id='$id'";
    $res=mysql_query($qry);

	if( mysql_num_rows($res))
	{
	$arr=mysql_fetch_assoc($res);
//	print_r($arr);
    extract($arr);
	
	
	
	
	
	
	if(trim($ipd)=="Excellent")
	{
		$ipd_no=10;
	}
	else if(trim($ipd)=="Acceptable")
	{
		$ipd_no=7;
	}
	else if(trim($ipd)=="Non-Acceptable")
	{
		$ipd_no=3;
	}
	else
	{
		$ipd_no=0;
	}

	if(trim($ses)=="Excellent")
	{
		$ses_no=10;
	}
	else if(trim($ses)=="Acceptable")
	{
		$ses_no=7;
	}
	else if(trim($ses)=="Non-Acceptable")
	{
		$ses_no=3;
	}
	else
	{
		$ses_no=0;
	}
	
	

	if(trim($rfw)=="Excellent")
	{
		$rfw_no=10;
	}
	else if(trim($rfw)=="Acceptable")
	{
		$rfw_no=7;
	}
	else if(trim($rfw)=="Non-Acceptable")
	{
		$rfw_no=3;
	}
	else
	{
		$rfw_no=0;
	}
	
	
	if(trim($opw)=="Excellent")
	{
		$opw_no=10;
	}
	else if(trim($opw)=="Acceptable")
	{
		$opw_no=7;
	}
	else if(trim($opw)=="Non-Acceptable")
	{
		$opw_no=3;
	}
	else
	{
		$opw_no=0;
	}
	
	
	
	if(trim($mpw)=="Excellent")
	{
		$mpw_no=10;
	}
	else if(trim($mpw)=="Acceptable")
	{
		$mpw_no=7;
	}
	else if(trim($mpw)=="Non-Acceptable")
	{
		$mpw_no=3;
	}
	else
	{
		$mpw_no=0;
	}
	
	
	
	if(trim($dme)=="Excellent")
	{
		$dme_no=10;
	}
	else if(trim($dme)=="Acceptable")
	{
		$dme_no=7;
	}
	else if(trim($mpw)=="Non-Acceptable")
	{
		$dme_no=3;
	}
	else
	{
		$dme_no=0;
	}
	
	
	
	if(trim($pts)=="Excellent")
	{
		$pts_no=10;
	}
	else if(trim($pts)=="Acceptable")
	{
		$pts_no=7;
	}
	else if(trim($pts)=="Non-Acceptable")
	{
		$pts_no=3;
	}
	else
	{
		$pts_no=0;
	}
	
	
	
	if(trim($dep)=="Excellent")
	{
		$dep_no=10;
	}
	else if(trim($dep)=="Acceptable")
	{
		$dep_no=7;
	}
	else if(trim($dep)=="Non-Acceptable")
	{
		$dep_no=3;
	}
	else
	{
		$dep_no=0;
	}
	
	
	
	if(trim($ins)=="Excellent")
	{
		$ins_no=10;
	}
	else if(trim($ins)=="Acceptable")
	{
		$ins_no=7;
	}
	else if(trim($ins)=="Non-Acceptable")
	{
		$ins_no=3;
	}
	else
	{
		$ins_no=0;
	}
	
	
	if(trim($pde)=="Excellent")
	{
		$pde_no=10;
	}
	else if(trim($pde)=="Acceptable")
	{
		$pde_no=7;
	}
	else if(trim($pde)=="Non-Acceptable")
	{
		$pde_no=3;
	}
	else
	{
		$pde_no=0;
	}
	
	
	if(trim($ppt)=="Excellent")
	{
		$ppt_no=10;
	}
	else if(trim($ppt)=="Acceptable")
	{
		$ppt_no=7;
	}
	else if(trim($ppt)=="Non-Acceptable")
	{
		$ppt_no=3;
	}
	else
	{
		$ppt_no=0;
	}
	
	
	if(trim($pre)=="Excellent")
	{
		$pre_no=10;
	}
	else if(trim($pre)=="Acceptable")
	{
		$pre_no=7;
	}
	else if(trim($pre)=="Non-Acceptable")
	{
		$pre_no=3;
	}
	else
	{
		$pre_no=0;
	}
	
	
	
	if(trim($dct)=="Excellent")
	{
		$dct_no=10;
	}
	else if(trim($dct)=="Acceptable")
	{
		$dct_no=7;
	}
	else if(trim($dct)=="Non-Acceptable")
	{
		$dct_no=3;
	}
	else
	{
		$dct_no=0;
	}
	
	
	if(trim($ccd)=="Excellent")
	{
		$ccd_no=10;
	}
	else if(trim($ccd)=="Acceptable")
	{
		$ccd_no=7;
	}
	else if(trim($ccd)=="Non-Acceptable")
	{
		$ccd_no=3;
	}
	else
	{
		$ccd_no=0;
	}
	
	
	if(trim($rfc)=="Excellent")
	{
		$rfc_no=10;
	}
	else if(trim($rfc)=="Acceptable")
	{
		$rfc_no=7;
	}
	else if(trim($rfc)=="Non-Acceptable")
	{
		$rfc_no=3;
	}
	else
	{
		$rfc_no=0;
	}
	
	
	
	
	
	
	
	
	
	
	?>
	
	<h3>Internal Marks:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Industrial Training  </td><td><?= $ipd_no +$rfw_no +$ses_no +$opw_no +$mpw_no +$dme_no +$pts_no+$dep_no +$ins_no +$pde_no +$ppt_no +$pre_no +$dct_no +$ccd_no +$rfc_no  ?>/150</td></tr>
	</table>
  
	
	
	 
	<h3>Project Proposal:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th><th>Edit</th></tr>
	<tr><td>Identify Problem Domain </td><td><?= $ipd ?>(<?= $ipd_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=ipd'><select name='ipd' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' name='submit' class='btn btn-danger'></form></td></tr>
	<tr><td>Requirement analysis and Feasibility work</td><td><?= $rfw ?>(<?= $rfw_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=rfw'><select name='rfw' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' name='submit' class='btn btn-danger'></form></td></tr>
	<tr><td>Study of the existing systems </td><td><?= $ses ?>(<?= $ses_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=ses'><select name='ses' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	<tr><td>Objective of Proposed work </td><td><?= $opw ?>(<?= $opw_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=opw'><select name='opw' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	<tr><td>Methodology of the Proposed work </td><td><?= $mpw ?>(<?= $mpw_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=mpw'><select name='mpw' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	</table>
   
	<h3>Mid-term Project evaluation:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th><th>Edit</th></tr>
	<tr><td>Design methodology </td><td><?= $dme ?>(<?= $dme_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=dme'><select name='dme' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	<tr><td>Planning of project work and Team structure </td><td><?= $pts ?>(<?= $pts_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=pts'><select name='pts' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	<tr><td>Demonstartion and Presentation </td><td><?= $dep ?>(<?= $dep_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=dep'><select name='dep' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	</table>

	<h3>Project evaluation:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th><th>Edit</th></tr>
	<tr><td>Incorporation of suggestions </td><td><?= $ins ?>(<?= $ins_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=ins'><select name='ins' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	<tr><td>Project demonstration  </td><td><?= $pde ?>(<?= $pde_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=pde'><select name='pde' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	<tr><td>Presentation </td><td><?= $ppt ?>(<?= $ppt_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=ppt'><select name='ppt' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger' name='submit'></form></td></tr>
	</table>
   
	<h3>Project Report evaluation:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th><th>Edit</th></tr>
	<tr><td>Formatting of project report  </td><td><?= $pre ?>(<?= $pre_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=pre'><select name='pre' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input type='submit' class='btn btn-danger'></form></td></tr>
	<tr><td>Description of concepts and Technical details </td><td><?= $dct ?>(<?= $dct_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=dct'><select name='dct' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input name='submit' type='submit' class='btn btn-danger'></form></td></tr>
	<tr><td>Conclusions and Discussion </td><td><?= $ccd ?>(<?= $ccd_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=ccd'><select name='ccd' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input name='submit' type='submit' class='btn btn-danger'></form></td></tr>
	<tr><td>References and Citations</td><td><?= $rfc ?>(<?= $rfc_no ?>)</td><td><form class='from form-inline' method='post' action='intmarks.php?id=<?= $student_id?>&&change=rfc'><select name='rfc' class='form-control'><option value='Excellent'>Excellent</option><option value='Acceptable'>Acceptable</option><option value='Non-Acceptable'>Non-Acceptable</option> </select>&nbsp;&nbsp;<input name='submit' type='submit' class='btn btn-danger'></form></td></tr>
	</table>


	

   
   
   <?
	}   
   else
   {
   
     
    $qry="select * from students where id='$id'";
    $res=mysql_query($qry);
    $arr=mysql_fetch_assoc($res);
    extract($arr);
	$roll_no=(int)$roll_no;
   
   
   
   
   ?>	
	<form class='well form-horizontal' role='form'  method='post' action='enter_internal.php'>
	<input type='hidden' name='id' value='<?= $id ?>'>
	
	
	
	<?
	//========================================================================
	?>

<h3>Project Proposal :</h3>
<hr>
<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Identify Problem Domain :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="ipd" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="ipd" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="ipd" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div>
</div>
<hr>
</div >



<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Requirement analysis and Feasibility work :
</label>
</div >
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="rfw" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="rfw" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="rfw" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>	
<label class='checkbox-inline' >
Study of the existing systems :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="ses" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="ses" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="ses" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Objective of Proposed work :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="opw" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="opw" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="opw" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Methodology of the Proposed work :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="mpw" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="mpw" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="mpw" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >


<hr>
<hr>
<h3>Mid-term Project evaluation :</h3>
<hr>
<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Design methodology :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="dme" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="dme" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="dme" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >



<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Planning of project work and Team structure :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="pts" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="pts" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="pts" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Demonstartion and Presentation :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="dep" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="dep" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="dep" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<hr>
<hr>
<h3>Project evaluation :</h3>
<hr>
<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Incorporation of suggestions : </label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="ins" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="ins" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="ins" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >



<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Project demonstration :</label>
</div>
<div class='col-md-6'>

<label class='checkbox-inline'>
<input type="radio" name="pde" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="pde" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="pde" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Presentation :</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="ppt" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="ppt" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="ppt" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<hr>
<hr>
<h3>Project Report evaluation :</h3>
<hr>
<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Formatting of project report :
</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="pre" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="pre" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="pre" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >



<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Description of concepts and Technical details :
</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="dct" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="dct" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="dct" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
Conclusions and Discussion :
</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="ccd" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="ccd" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="ccd" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >

<div class='form-group'>
<div class='row'>
<div class='col-md-6'>
<label class='checkbox-inline' >
References and Citations :
</label>
</div>
<div class='col-md-6'>
<label class='checkbox-inline'>
<input type="radio" name="rfc" value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="rfc" value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="rfc" value="Non-Acceptable" size="10">Non-Acceptable<br>
</label>
</div >
</div >
<hr>
</div >
<div class='form-group'>
<label for='submt'></label>
<input type='submit' name='submit' value='Enter Marks' class='btn btn-success'>
</div>
<?
//========================================================================
?>

	</form>
	
	
		<?
    
	}
    ?>
    
    
    
    
    
    <!--working area--->
    </div>
    <div class='col-md-2'></div>
    </div>

    
<? include"footer.php"?>    
    
    
    
    
    
<?
if(isset($_POST['submit']))
{
extract($_REQUEST);
echo $qry="update `internal marks`  set $change= ' ". $$change." ' where student_id='$id'";
$res=mysql_query($qry) or die(mysql_error());
unset($_POST['submit']);
header("location:intmarks.php?id=$id");
}


?>
