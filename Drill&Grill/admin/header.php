<? include"database.php"?>

<?

if(isset($_SESSION['uname']) &&  isset($_SESSION['pass']) &&   isset($_SESSION['role']) && $_SESSION['role']=='admin' )
{
	// do nothing
}
else
{
	header('location:../index.php');
	exit();
}

?>






<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>DRILL & GRILL</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="container-fluid" id='top'>
  
	<!-- top navbar -->
       <div class="container"  >
		    <div class='row'>
    	      <div class="col-md-12" >
                <img style='width:100%' src='../images/banner.png' class='center-block'>
    	      </div>
    	   </div>
       </div>
</div>

    <div class="container">
        <div class='row'>
			<div class='col-md-12'>
    
    
    
      <nav class="navbar well" role="navigation" style='padding:0'> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Home</a>
        </div>
      
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
        
        
        <li ><a  href="vdept.php">Dept Cordinators</b></a></li>
        <li ><a  href="veval.php">Evaluators</a></li>
        <li ><a  href="vclass.php">Class</a></li>
        
        
        
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="change_password.php">Change Password</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
