<?php 
include("DBconnect.php");
if(isset($_POST["save"]))
{
	$deptname=trim($_POST["deptname"]);
	$deptaddr=trim($_POST["deptaddr"]);
	$dcontact=trim($_POST["dcontact"]);
	$demail=trim($_POST["demail"]);
	$dwebsite=trim($_POST["dwebsite"]);
	$toemp=trim($_POST["toemp"]);
	$toorg=trim($_POST["toorg"]);
	$rs=mysqli_query($con,"insert into deptinfo value('$deptname','$deptaddr','$dcontact','$demail','$dwebsite','$toemp','$toorg')");
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
<table width="41%"  border="0" align="center">
  <caption align="top">
  Department information
  </caption>
  <tr>
    <td width="53%">Department name </td>
    <td width="47%">
      <input name="deptname" type="text" id="deptname" required >
    </td>
  </tr>
  <tr>
    <td>Department address </td>
    <td>
      <textarea name="deptaddr" id="deptaddr" required="required"></textarea>
   </td>
  </tr>
  <tr>
    <td>Department contact </td>
    <td>
      <input name="dcontact" type="text" id="dcontact" required placeholder="department phone number">
</td>
  </tr>
  <tr>
    <td>Department email </td>
    <td>
      <input name="demail" type="email" id="demail" required>
  </td>
  </tr>
  <tr>
    <td>Department website </td>
    <td>
      <input name="dwebsite" type="text" id="dwebsite" required>
   </td>
  </tr>
  <tr>
    <td>Total employee </td>
    <td>
      <input name="toemp" type="text" id="toemp" required>
</td>
  </tr>
  <tr>
    <td>Total organisation </td>
    <td><input name="toorg" type="text" id="toorg" required>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input name="save" type="submit" id="save" value="Save">
    </div></td>
    </tr>
</table>

</form>
</body>
</html>
