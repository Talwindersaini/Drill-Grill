<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Class</li>
        <li class="active">Marks</li>
        <li class="active">External Marks</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row ' style='margin-top:0px'>
    <!--working area--->
    

<h3>External Marks</h3>
<hr>

<?php
extract($_REQUEST);
$qry="select * from students where id= $id";
$res=mysql_query($qry);
$arr=mysql_fetch_assoc($res);
extract($arr);
if(($m_obt!='' or $m_obt!=0) and ( !isset($update)) )
{
?>


<table class='table table-bordered table-striped table-hover'>
<tr>
<th>Name</th>
<th>External Marks</th>
<th>University Roll No</th>
</tr>
<tr>
<td><?= $name ?></td>
<td><?= $m_obt?>/<?= $m_max ?></td>
<td><?= $roll_no ?></td>
</tr>

<?
}
else
{
?>
<form class='form' method='post' action='extmarks.php?id=<?= $id ?>' >
<table class='table table-bordered table-striped table-hover'>
<tr>
<th>Name</th>
<th>External Marks</th>
<th>University Roll No</th>
</tr>
<tr>
<td><?= $name ?></td>
<td><input type='text' name='m_obt' style='width:150px; display:inline' class='form-control'><b><big><big><big>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</big></big></big></b><input type='text' style='width:150px; display:inline'  name='m_max' class='form-control'>&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' class='btn btn-danger' value='Submit' name='submit' ></td>
<td><?= $roll_no ?></td>
</tr>

<?
}
?>

</table>
<?
if(!isset($update))
{
?>
<a href='extmarks.php?id=<?=$id ?>&&update=True'><button class='btn  btn-danger'>Update</button></a>
<?
}
?>
   <!--working area--->
    </div>
    
<? include"footer.php"?>    
<br>
<br>
    
    
    
    
<?
if(isset($_POST['submit']))
{
extract($_REQUEST);
if($m_obt!='' && $m_max!='')
{
$qry="update students  set m_obt='$m_obt', m_max='$m_max' where id='$id'";
$res=mysql_query($qry) or die(mysql_error());
}	
unset($_POST['submit']);
header("location:extmarks.php?id=$id");
}


?>
