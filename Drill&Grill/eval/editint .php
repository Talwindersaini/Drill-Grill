<? include"header.php"?>	
<?
$id= $_REQUEST['id'];
?>	
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
    //print_r($_REQUEST);
    
    $qry="select * from internal marks where id='$id'";
    $res=mysql_query($qry);
    $arr=mysql_fetch_assoc($res);
	extract($arr);
    
    $qry="select * from classes where id='$class_id'";
    $res=mysql_query($qry);
    $arr=mysql_fetch_assoc($res);
    //print_r($arr);
	$roll_no=(int)$roll_no;
    if(($roll_no>=$arr['rsr'] and $roll_no<=$arr['rer']) or ($roll_no>=$arr['lsr'] and $roll_no<=$arr['ler']))
    {
	?>
		
	<form class='well form-horizontal' role='form'  method='post' action='enter_internal.php'>
	<input type='hidden' name='class_id' value='<?= $class_id ?>'>
	<input type='hidden' name='roll_no' value='<?= $roll_no ?>'>
	
	
	
	<?
	//========================================================================
	?>

<hr>
<hr>
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
<input type="radio" name="ipd" <?if($ipd='Excellent') echo" selected"?> value="Excellent" size="10">Excellent
</label><label class='checkbox-inline'>
<input type="radio" name="ipd" <?if($ipd='Excellent') echo" selected"?> value="Acceptable" size="10">Acceptable
</label><label class='checkbox-inline'>
<input type="radio" name="ipd" <?if($ipd='Excellent') echo" selected"?> value="Non-Acceptable" size="10">Non-Acceptable<br>
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
	else
	{
		$qry="select * from migration where mgr='$roll_no' and class_id='$class_id'";
		$res=mysql_query($qry);
		if(mysql_num_rows($res)!=0)
		{
		?>
	<form class='well form-horizontal' role='form'  method='post' action='enter_internal.php'>
	<input type='hidden' name='class_id' value='<?= $class_id ?>'>
	<input type='hidden' name='roll_no' value='<?= $roll_no ?>'>
	
	
	
	<?
	//========================================================================
	?>

<hr>
<hr>
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
		else
		{
			//echo $class_id;
			header("location:intmarks.php?err=41&&id=$class_id");
			exit();
		}
		
	}
    
    
    ?>
    
    
    
    
    
    <!--working area--->
    </div>
    <div class='col-md-2'></div>
    </div>

    
<? include"footer.php"?>    
    
    
    
    
