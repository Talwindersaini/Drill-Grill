<?php include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
	  <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Class</li>
        <li class="active">Marks</li>
        <li class="active">Total Marks</li>
      </ul>
      </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row' style='margin-top:100px'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
    <!--working area--->
    <?php
    extract($_REQUEST);
     $student_id=$id;
    $qry="select * from `internal marks` where student_id='$id'";
    $res=mysql_query($qry);

	if( mysql_num_rows($res))
	{
	$arr=mysql_fetch_assoc($res);
	//print_r($arr);
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
	 
	<h3>Project Proposal:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Identify Problem Domain </td><td><?= $ipd ?>(<?= $ipd_no ?>)</td></tr>
	<tr><td>Requirement analysis and Feasibility work</td><td><?= $rfw?>(<?= $rfw_no ?>)</td></tr>
	<tr><td>Study of the existing systems </td><td><?= $ses ?>(<?= $ses_no ?>)</td></tr>
	<tr><td>Objective of Proposed work </td><td><?= $opw ?>(<?= $opw_no ?>)</td></tr>
	<tr><td>Methodology of the Proposed work </td><td><?= $mpw ?>(<?= $mpw_no ?>)</td></tr>
	</table>
   
	<h3>Mid-term Project evaluation:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Design methodology </td><td><?= $dme ?>(<?= $dme_no ?>)</td></tr>
	<tr><td>Planning of project work and Team structure </td><td><?= $pts ?>(<?= $pts_no ?>)</td></tr>
	<tr><td>Demonstartion and Presentation </td><td><?= $dep ?>(<?= $dep_no ?>)</td></tr>
	</table>

	<h3>Project evaluation:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Incorporation of suggestions </td><td><?= $ins ?>(<?= $ins_no ?>)</td></tr>
	<tr><td>Project demonstration  </td><td><?= $pde ?>(<?= $pde_no ?>)</td></tr>
	<tr><td>Presentation </td><td><?= $ppt ?>(<?= $ppt_no ?>)</td></tr>
	</table>
   
	<h3>Project Report evaluation:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Formatting of project report  </td><td><?= $pre ?>(<?= $pre_no ?>)</td></tr>
	<tr><td>Description of concepts and Technical details </td><td><?= $dct ?>(<?= $dct_no ?>)</td></tr>
	<tr><td>Conclusions and Discussion </td><td><?= $ccd ?>(<?= $ccd_no ?>)</td></tr>
	<tr><td>References and Citations</td><td><?= $rfc ?>(<?= $rfc_no ?>)</td></tr>
	</table>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	<h3>Internal Marks:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Industrial Training  </td><td><?= $intmark=$ipd_no +$rfw_no +$ses_no +$opw_no +$mpw_no +$dme_no +$pts_no+$dep_no +$ins_no +$pde_no +$ppt_no +$pre_no +$dct_no +$ccd_no +$rfc_no  ?>/150</td></tr>
	</table>
  
  
   
   
   <?
	}
    
	extract($_REQUEST);
    $student_id=$id;
    $qry="select * from `students` where id='$id'";
    $res=mysql_query($qry);

	if( mysql_num_rows($res))
	{
	$arr=mysql_fetch_assoc($res);
//	print_r($arr);
    extract($arr);
	?>
   <h3>External Marks:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Industrial Training  </td><td><?= $m_obt ?>/<?= $m_max ?></td></tr>
	</table>
   <?
	}
   ?>

<? if(isset($intmarks) && isset($m_obt)) 
{
?>
   <h3>Total Marks:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Industrial Training  </td><td><?= $m_obt+$intmarks ?>/<?= $m_max+150 ?></td></tr>
	</table>
<?
}
else if(isset($intmarks) && (!isset($m_obt)))
{
?>
   <h3>Total Marks:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Industrial Training  </td><td><?= $intmarks ?>/150</td></tr>
	</table>


<?	
}
else if((!isset($intmarks)) && (isset($m_obt)))
{
?>
   <h3>Total Marks:</h3>
	<table class='table table-bordered table-striped table-hovered'>
	<tr><th style='width:50%'>Category</th><th>Marks</th></tr>
	<tr><td>Industrial Training  </td><td><?= $m_obt ?>/<?= $m_max ?></td></tr>
	</table>


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
