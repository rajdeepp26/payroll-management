<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="398" height="187" border="1" align="center">
    <tr>
      <th colspan="2" scope="col">Bill display by id </th>
    </tr>
    <tr>
      <td width="186" height="93">Enter employee id </td>
      <td width="273"><input name="empid" type="text" id="empid"></td>
    </tr>
    <tr>
      <td height="61" colspan="2"><p>&nbsp;
      </p>
      <p>
        <input type="submit" name="Submit" value="Submit">
</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
   
  <?php 
include("DBconnect.php");
if(isset($_POST["Submit"]))
{
	 $empid=$_POST["empid"];

	$rs=mysqli_query($con,"select * from salary where empid='$empid'");
	if(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_object($rs);
		echo "<table width='515' border='1' align='center'>
		<tr>
		  <th colspan='2' scope='col'>Paystatement</th>
		</tr>
		<tr>
		  <td width='244'>Pay statement number </td>
		  <td width='255'>&nbsp;$row->pstatno</td>
		</tr>
		<tr>
		  <td>Pay date</td>
		  <td>&nbsp;$row->pdate</td>
		</tr>
		<tr>
		  <td>Pay month</td>
		  <td>&nbsp;$row->pmonth</td>
		</tr>
		<tr>
		  <td>Pay year</td>
		  <td>&nbsp;$row->pyear</td>
		</tr>
		<tr>
		  <td>Employee's id</td>
		  <td>&nbsp;$row->empid</td>
		</tr>
		<tr>
		  <td>Employee's name</td>
		  <td>&nbsp;$row->ename</td>
		</tr>
		<tr>
		  <td>Department name</td>
		  <td>&nbsp;$row->deptname</td>
		</tr>
		<tr>
		  <td>Employee's grade</td>
		  <td>&nbsp;$row->empgrade</td>
		</tr>
		<tr>
		  <td>Basic pay </td>
		  <td>&nbsp;$row->basicpay</td>
		</tr>
		<tr>
		  <td>Employee's grade pay </td>
		  <td>&nbsp;$row->empgradepay</td>
		</tr>
		<tr>
		  <td>Dearness allowance </td>
		  <td>&nbsp;$row->pda</td>
		</tr>
		<tr>
		  <td>House rent allowance</td>
		  <td>&nbsp;$row->phra</td>
		</tr>
		<tr>
		  <td>Medical allowance</td>
		  <td>&nbsp;$row->pma</td>
		</tr>
		<tr>
		  <td>Total earning</td>
		  <td>&nbsp;$row->totalearning</td>
		</tr>
		<tr>
		  <td>Gross pay</td>
		  <td>&nbsp;$row->grosspay</td>
		</tr>
		<tr>
		  <td>NPS deduction</td>
		  <td>&nbsp;$row->pnps</td>
		</tr>
		<tr>
		  <td>PTax deduction</td>
		  <td>&nbsp;$row->ptax</td>
		</tr>
		<tr>
		  <td>PGIS deduction</td>
		  <td>&nbsp;$row->pgis</td>
		</tr>
		<tr>
		  <td>Net pay</td>
		  <td>&nbsp;$row->pnetpay</td>
		</tr>
		 </table>";	
	}			
	else
		{
		 echo "No record";
		}

}
  ?>
  
</form>
</body>
</html>
