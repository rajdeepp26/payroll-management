<?php
include("DBconnect.php");
session_start();
if(isset($_POST["Save"]))
{

$givenpwd=$_POST["givenpwd"];
$newpwd1=$_POST["newpwd1"];
$newpwd2=$_POST["newpwd2"];

$id=$_SESSION["empid"];
$rs=mysqli_query($con,"select pwd from userlogin where empid='id' ");
$row=mysqli_fetch_object($rs);
//$dbpwd=0;
//$dbpwd=$row;

	if($row->pwd==$givenpwd)
	{
		if($newpwd1==$newpwd2)
		{
			$rs=mysqli_query($con,"insert into userlogin value('$dbpwd','$newpwd2')");
			echo "<script>alert('password changed')</script>";
		}
		else
		{
			echo "<script>alert('new password not matched')</script>";
		}
	}
	else
	{
		echo "<script>alert('Working password not matched')</script>";
	}
}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="428" height="235" border="1" align="center">
    <tr>
      <td width="203">Enter password </td>
      <td width="209"><input name="givenpwd" type="text" id="givenpwd"></td>
    </tr>
    <tr>
      <td>Enter your new password </td>
      <td><input name="newpwd1" type="text" id="newpwd1"></td>
    </tr>
    <tr>
      <td>Re-type your new password</td>
      <td><input name="newpwd2" type="text" id="newpwd2"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Save" type="submit" id="Save" value="Save"></td>
    </tr>
  </table>  
  <div align="center"></div>
</form>
</body>
</html>
