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
      <th colspan="2" scope="col">Bill display by organisation</th>
    </tr>
    <tr>
      <td width="186" height="93">Enter organisation name </td>
      <td width="273"><input name="emporg" type="text" id="emporg"></td>
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
	 $emporg=$_POST["emporg"];

	$rs=mysqli_query($con,"select * from salary where emporg='$emporg'");
	if(mysqli_num_rows($rs)>0)
	{
	echo "<table width='1195' height='141' border='1'>
    <tr>
      <th colspan='19' scope='col'>Bill Display </th>
    </tr>
    <tr>
      <td>Pay statement number </td>
      <td>Pay date </td>
      <td>Pay month </td>
      <td>Pay year</td>
      <td>Employee's id </td>
      <td>Employee's name </td>
      <td>Department name </td>
      <td>Employee's grade</td>
      <td>Basic pay </td>
      <td>Employee's grade pay </td>
      <td>Dearness allowance </td>
      <td>House rent allowance </td>
      <td>Medical allowance </td>
      <td>Total earning</td>
      <td>Gross pay </td>
      <td>NPS deduction </td>
      <td>PTax deduction </td>
      <td>PGIS deduction </td>
      <td>Net pay </td>
    </tr>";
	$tpnetpay=0;
	while($row=mysqli_fetch_object($rs))
	{
	echo " <tr>
      <td>&nbsp;$row->pstatno</td>
      <td>&nbsp;$row->pdate</td>
      <td>&nbsp;$row->pmonth</td>
      <td>&nbsp;$row->pyear</td>
      <td>&nbsp;$row->empid</td>
      <td>&nbsp;$row->ename</td>
      <td>&nbsp;$row->deptname</td>
      <td>&nbsp;$row->empgrade</td>
      <td>&nbsp;$row->basicpay</td>
      <td>&nbsp;$row->empgradepay</td>
      <td>&nbsp;$row->pda</td>
      <td>&nbsp;$row->phra</td>
      <td>&nbsp;$row->pma</td>
      <td>&nbsp;$row->totalearning</td>
      <td>&nbsp;$row->grosspay</td>
      <td>&nbsp;$row->pnps</td>
      <td>&nbsp;$row->ptax</td>
      <td>&nbsp;$row->pgis</td>
      <td>&nbsp;$row->pnetpay</td>
    </tr>";
	$tpnetpay=$tpnetpay+$row->pnetpay;
	}
   echo " <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;$tpnetpay</td>
    </tr> </table>";
  }
  }
  ?>
  
 </form>
 
   
</body>
</html>
