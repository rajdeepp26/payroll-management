<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">


<?php 
include("DBconnect.php");
session_start();
$id=$_SESSION["empid"];
$rs=mysqli_query($con,"select * from empinfo where empid='$id' ");
if(mysqli_num_rows($rs)>0)
{
		$row=mysqli_fetch_object($rs);
		echo " <table width='569' border='1' align='center'>
		<tr>
		  <th colspan='2' scope='col'>Information</th>
		</tr>
		<tr>
		  <td width='244'>Employee Id</td>
		  <td width='309'>&nbsp;$row->empid</td>
		</tr>
		<tr>
		  <td>Employee Name</td>
		  <td>&nbsp;$row->ename</td>
		</tr>
		<tr>
		  <td>Employee Designation</td>
		  <td>&nbsp;$row->edesig</td>
		</tr>
		<tr>
		  <td>Employee Grade</td>
		  <td>&nbsp;$row->empgrade</td>
		</tr>
		<tr>
		  <td>Employee Organisation</td>
		  <td>&nbsp;$row->emporg</td>
		</tr>
		<tr>
		  <td>Department Name</td>
		  <td>&nbsp;$row->deptname</td>
		</tr>
		<tr>
		  <td>Date of Joining</td>
		  <td>&nbsp;$row->doj</td>
		</tr>
		<tr>
		  <td>Date of Retirement</td>
		  <td>&nbsp;$row->dor</td>
		</tr>
		<tr>
		  <td>Date of Birth </td>
		  <td>&nbsp;$row->dob</td>
		</tr>
		<tr>
		  <td>Basic Pay </td>
		  <td>&nbsp;$row->basicpay</td>
		</tr>
		<tr>
		  <td>Employee Grade Pay</td>
		  <td>&nbsp;$row->empgradepay</td>
		</tr>
		<tr>
		  <td>Employee Caste</td>
		  <td>&nbsp;$row->empcaste</td>
		</tr>
		<tr>
		  <td>Employee Email </td>
		  <td>&nbsp;$row->empemail</td>
		</tr>
		<tr>
		  <td>Employee Phone</td>
		  <td>&nbsp;$row->emphone</td>
		</tr>
		<tr>
		  <td>Employee Age </td>
		  <td>&nbsp;$row->empage</td>
		</tr>
		<tr>
		  <td>Employee Gender</td>
		  <td>&nbsp;$row->empgender</td>
		</tr>
		<tr>
		  <td>Marital Status</td>
		  <td>&nbsp;$row->empmstat</td>
		</tr>
		<tr>
		  <td>Mother's Name </td>
		  <td>&nbsp;$row->mname</td>
		</tr>
		<tr>
		  <td>Father's Name</td>
		  <td>&nbsp;$row->fname</td>
		</tr>
		<tr>
		  <td>Employee Portal Address</td>
		  <td>&nbsp;$row->emppaddr</td>
		</tr>
		<tr>
		  <td>Employee Permanent Address</td>
		  <td>&nbsp;$row->empperaddr</td>
		</tr>
	    </table>";
}
else
{
	echo "No record";
}
?>
</form>
</body>
</html>
