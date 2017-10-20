<?php 
include("DBconnect.php");
$rs=mysqli_query($con,"select * from salary order by pstatno asc");
echo "<form name='form1' method='post' action=''>
  <table width='1195' height='141' border='1'>
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
	}
	echo " </table>
	</form>";
	

?>