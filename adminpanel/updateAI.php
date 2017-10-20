<?php 
include("DBconnect.php");
if(isset($_POST["save"]))
{
	$aincrement=trim($_POST["aincrement"]);
	$rs=mysqli_query($con,"insert into annualinc value('$aincrement')");
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
<br>
<br>
<br>
<br>
<br>
<br>

  <table width="29%" height="146"  border="0" align="center">
    <caption align="top">
  Annual increment
    </caption>
    <tr>
      <td width="49%">Annual increment </td>
      <td width="51%"><input name="aincrement" type="text" id="aincrement"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="save" type="submit" id="save" value="save">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
