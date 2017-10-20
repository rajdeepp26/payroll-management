<?php 
include("DBconnect.php");
if(isset($_POST["save"]))
{
	$nps=trim($_POST["nps"]);
	
	
	$gd1=trim($_POST["gd1"]);
	$gd2=trim($_POST["gd2"]);
	$gd3=trim($_POST["gd3"]);
	$gd4=trim($_POST["gd4"]);
	$rs=mysqli_query($con,"insert into npsdeduction value('$nps')");
	$rs=mysqli_query($con,"insert into ptaxdeduction value('$gd1','$gd2','$gd3','$gd4')");
	if($rs)
	{
		echo"<script>alert('saved')</script>";
	}
	else
	{
		echo"<script>alert('Unable to saved')</script>";
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

<table width="49%" height="106"  border="0" align="center">
  <caption align="top">
  NPS-Deduction
  </caption>
  <tr>
    <td height="102">New pension scheme </td>
    <td><input name="nps" type="text" id="nps"></td>
  </tr>
  </table>
<br>
<br>
  <br>
  <br>
<table width="49%" height="182"  border="0" align="center">
  <caption align="top">
  
  P-Tax Deduction
  </caption>
  <tr>
    <td width="50%">P.tax for grade 1 </td>
    <td width="50%"><input name="gd1" type="text" id="gd1"></td>
  </tr>
  <tr>
    <td>P.tax for grade 2 </td>
    <td><input name="gd2" type="text" id="gd2"></td>
  </tr>
  <tr>
    <td>P.tax for grade 3 </td>
    <td><input name="gd3" type="text" id="gd3"></td>
  </tr>
  <tr>
    <td height="24">P.tax for grade 4 </td>
    <td><input name="gd4" type="text" id="gd4"></td>
  </tr>
  <tr>
    <td height="56" colspan="2">      
      <div align="center">
        <input name="save" type="submit" id="save" value="save">    
      </div></td>
    </tr>
</table>
</form>
</body>
</html>
