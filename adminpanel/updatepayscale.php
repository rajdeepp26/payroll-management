<?php
 include("DBconnect.php");
  if(isset($_POST["Submit"]))
  {
     $startbasicp=trim($_POST["startbasicp"]);
	 $endbasicp=trim($_POST["endbasicp"]);
	 $empgradepay=trim($_POST["empgradepay"]);
	 $deptname=trim($_POST["deptname"]);
	 $empgrade=trim($_POST["empgrade"]);
	 
	 $rs=mysqli_query($con,"insert into payscale value('$startbasicp','$endbasicp','$empgradepay','$deptname','$empgrade')");
	 
	 if($rs)
	 {
	   echo"<script>alert('saved')</script>";
	  }
	  else
	  {
	   echo"<script>alert('Not saved')</script>";
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
  <table width="409" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Payscale</div></td>
    </tr>
    <tr>
      <td width="159" height="38">Start Basic </td>
      <td width="234">        <input name="startbasicp" type="text" id="startbasicp">      </td>
    </tr>
    <tr>
      <td height="38">End Basic </td>
      <td>        <input name="endbasicp" type="text" id="endbasicp">      </td>
    </tr>
    <tr>
      <td height="40">Grade Pay</td>
      <td><input name="empgradepay" type="text" id="empgradepay"></td>
    </tr>
    <tr>
      <td height="33">Department Name </td>
      <td>        <select name="deptname" id="deptname">
        <option>Select</option>
        <?php 
			include("DBconnect.php");
			$rs=mysqli_query($con,"select deptname from deptinfo order by deptname asc");
			while($row=mysqli_fetch_object($rs))
			{
				echo"<option>$row->deptname</option>";
			}
		
		
		?>
      </select></td>
    </tr>
    <tr>
      <td height="39">Employee Grade</td>
      <td>        <select name="empgrade" id="empgrade">
        <option>select</option>
        <option>Grade-I</option>
        <option>Grade-II</option>
        <option>Grade-III</option>
        <option>Grade-IV</option>
      </select></td>
    </tr>
    <tr>
      <td height="49" colspan="2">	  <input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
</body>
</html>
