<?php 

include("DBconnect.php");
$rs=mysqli_query($con,"select * from payscale order by deptname asc");
echo "<form name='form1' method='post' action=''>
      <table width='1039' border='1' align='center'>
    <tr>
      <th colspan='5' scope='col'>Payscale Information </th>
    </tr>
    <tr>
      <td>Start basic pay </td>
      <td>End basic pay </td>
      <td>Employee grade pay</td>
      <td>Department name </td>
      <td>Grade</td>
    </tr>";
	
	while($row=mysqli_fetch_object($rs))
	{
	echo " <tr>
      <td>&nbsp;$row->startbasicp</td>
      <td>&nbsp;$row->endbasicp</td>
      <td>&nbsp;$row->empgradepay</td>
      <td>&nbsp;$row->deptname</td>
      <td>&nbsp;$row->empgrade</td>
    </tr>";
	
	}
	echo "
      </table>
     </form>";


?>