<?php 
include("../header.php");
include("DBconnect.php");
session_start();

?>







<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Admin login</title>
</head>

<body>
<form name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="405" height="186" align="center" bordercolor="#0000CC">
    <tr>
      <th colspan="2" scope="col">Admin login </th>
    </tr>
    <tr>
      <td width="180">Enter Employee id </td>
      <td width="209"><input name="empid" type="text" id="empid"></td>
    </tr>
    <tr>
      <td>Enter password </td>
      <td><input name="pwd" type="password" id="pwd"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Login" type="submit" id="Login" value="Login" ></td>
    </tr>
  </table>
  
  <?php
  if(isset($_POST["Login"]))
{
$empid=$_POST["empid"];
$pwd=$_POST["pwd"];
		
		$rs=mysqli_query($con,"select * from adminlogin where empid='$empid' and pwd='$pwd'");
		if(mysqli_num_rows($rs)>0)
		{
			header('Location:paneladmin.php');
			$_SESSION["empid"]=$empid;
		}
		else
		{
		echo "invalid password and username";
		}

}


  ?>
  
</form>
<?php include("../footer.php"); ?>
</body>
</html>
