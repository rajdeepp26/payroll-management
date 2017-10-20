<?php 
include("DBconnect.php");
if(isset($_POST["save"]))
{
	$da=trim($_POST["da"]);
	$hra=trim($_POST["hra"]);
	$ma=trim($_POST["ma"]);
	$rs=mysqli_query($con,"insert into earnings value('$da','$hra','$ma')");
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
<table width="45%" height="154"  border="0" align="center">
  <caption align="top">
  Earnings
  </caption>
  <tr>
    <td width="49%">Dearness allowance </td>
    <td width="51%">      <input name="da" type="text" id="da">
    </td>
  </tr>
  <tr>
    <td>House rent allowance </td>
    <td>      <input name="hra" type="text" id="hra">
    </td>
  </tr>
  <tr>
    <td>Medical allowance</td>
    <td><input name="ma" type="text" id="ma"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input name="save" type="submit" id="save" value="save">
      </div>
   </td>
  </tr>
</table>
</form>
</body>
</html>
