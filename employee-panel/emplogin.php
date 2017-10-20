<?php 
include("header.php");
include("DBconnect.php");
session_start();
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <p >&nbsp;</p>
  <p>&nbsp;</p>
  <table width="420" height="194" border="1" align="center">
    <tr>
      <th colspan="2" scope="col"><div align="center">Employee's Login </div></th>
    </tr>
    <tr>
      <td width="203">Enter employee's id </td>
      <td width="201"><input name="empid" type="text" id="empid"></td>
    </tr>
    <tr>
      <td>Enter  password </td>
      <td><input name="pwd" type="password" id="pwd"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Login" type="submit" id="Login" value="Login"></td>
    </tr>
  </table>
  
  
  <?php 
  if(isset($_POST["Login"]))
{
$empid=$_POST["empid"];
$pwd=$_POST["pwd"];

		$rs=mysqli_query($con,"select * from userlogin where empid='$empid' and pwd='$pwd'");
		if(mysqli_num_rows($rs)>0)
		{
			header('Location:panelemp.php');
			$_SESSION["empid"]=$empid;
			
		}
		else
		{
		echo "<b><p align='center'>invalid password and username</p></b>";
		}

}

  ?>
</form>

<?php include("footer.php"); ?>
</body>
</html>
