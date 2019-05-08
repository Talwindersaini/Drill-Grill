<? include"header.php"?>	
	
	<div class='row'>
    <div class='col-md-4'>
 <ul class="breadcrumb">
        <li><a href="home.php">Home</a> <span class="divider"></span></li>
        <li class="active">Marks</li>
      </ul>    </div>
    <div class='col-md-4'></div>
    <div class='col-md-4'></div>
    </div>
    
	<div class='row' style='margin-top:100px'>
    <div class='col-md-4'></div>
    <div class='col-md-4'>
    <!--working area--->
    <? $id= $_REQUEST['id'];?>
<div class='row'>
<div class='col-md-2'><a href='intmarks.php?id=<?= $id ?>'><button class='btn btn-primary'>Internal Marks</button></a></div>
<div class='col-md-2'></div>
<div class='col-md-4'><a href='extmarks.php?id=<?= $id ?>'><button class='btn btn-primary'>external Marks</button></a></div>
<div class='col-md-2'></div>
<div class='col-md-2'><a href='totmarks.php?id=<?= $id ?>'><button class='btn btn-danger'>Total Marks</button></a></div>
</div>


    
    
    
    
    <!--working area--->
    </div>


    <div class='col-md-4'></div>
    </div>

    
<? include"footer.php"?>    
    
    
    
    
