
<?
ob_start();

if(isset($_GET['err']))
{
$errno=$_GET['err'];
if($errno==0)
{
$err='Form Not Completed';
}
if($errno==1)
{
$err='Please enter Username';
}
if($errno==2)
{
$err='Please enter Password';
}
if($errno==3)
{
$err='Wrong Password or Username';
}

if($errno==4)
{
$err='Enter Old password';
}

if($errno==5)
{
$err='Enter New password';
}

if($errno==6)
{
$err='Password changed';
}

if($errno==7)
{
$err='Old Password Wrong';
}

if($errno==8)
{
$err='Enter Same Password Twice';
}

if($errno==11)
{
$err='Enter First Name';
}

if($errno==12)
{
$err='Enter Last Name';
}

if($errno==13)
{
$err='Enter Email';
}

if($errno==14)
{
$err='Select Department';
}

if($errno==15)
{
$err='Username Already Used';
}

if($errno==16)
{
$err='Succefully Created';
}
if($errno==17)
{
$err='Succefully Deleted';
}
if($errno==18)
{
$err='Enter Username';
}



if($errno==21)
{
$err='Enter Batch';
}
if($errno==22)
{
$err='Enter Branch';
}
if($errno==23)
{
$err='Enter Class';
}
if($errno==24)
{
$err='Enter Section';
}
if($errno==25)
{
$err='Enter Regular Start Roll No';
}
if($errno==26)
{
$err='Enter Regular End Roll No';
}
if($errno==27)
{
$err='Enter Leet Start Roll No';
}
if($errno==28)
{
$err='Enter Leet End Roll No';
}
if($errno==29)
{
$err='No of Migration Students';
}
if($errno==30)
{
$err='Class already created with same Batch and Branch';
}
if($errno==31)
{
$err='Class Succefully created';
}
if($errno==32)
{
$err='Class Succefully Deleted';
}

if($errno==41)
{
$err='Roll No not a part of class';
}
if($errno==42)
{
$err='Internal Entered';
}


}
?>
<?
if(isset($err) && $err!="")
{
?>
<script>
alert("<?= $err ;?>");
</script>
<?
}
?>
