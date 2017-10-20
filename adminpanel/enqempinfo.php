<?php 
include("DBconnect.php");
$rs=mysqli_query($con,"select * from empinfo order by ename asc");
echo "  <form name='form1' method='post' action=''>
  <table width='1224' border='1' align='center'>
    <tr>
      <th colspan='21' scope='col'>Employee Information</th>
    </tr>
    <tr>
      <td>Employee Id </td>
      <td>Employee Name</td>
      <td>Employee Designation</td>
      <td>Employee Grade </td>
      <td>Employee Organisation </td>
      <td>Department Name </td>
      <td>Date of Joining </td>
      <td>Date of Retirement </td>
      <td>Date of Birth </td>
      <td>Basic Pay </td>
      <td>Employee Grade Pay </td>
      <td>Employee Caste </td>
      <td>Employee Email </td>
      <td>Employee Phone </td>
      <td>Employee Age </td>
      <td>Employee Gender </td>
      <td>Marital Status</td>
      <td>Mother's Name </td>
      <td>Father's Name </td>
      <td>Employee Portal Address </td>
      <td>Employee Permanent Address </td>
    </tr>";
	
	
while($row=mysqli_fetch_object($rs))
{
	echo "<tr>
      <td>&nbsp;$row->empid</td>
      <td>&nbsp;$row->ename</td>
      <td>&nbsp;$row->edesig</td>
      <td>&nbsp;$row->empgrade</td>
      <td>&nbsp;$row->emporg</td>
      <td>&nbsp;$row->deptname</td>
      <td>&nbsp;$row->doj</td>
      <td>&nbsp;$row->dor</td>
      <td>&nbsp;$row->dob</td>
      <td>&nbsp;$row->basicpay</td>
      <td>&nbsp;$row->empgradepay</td>
      <td>&nbsp;$row->empcaste</td>
      <td>&nbsp;$row->empemail</td>
      <td>&nbsp;$row->emphone</td>
      <td>&nbsp;$row->empage</td>
      <td>&nbsp;$row->empgender</td>
      <td>&nbsp;$row->empmstat</td>
      <td>&nbsp;$row->mname</td>
      <td>&nbsp;$row->fname</td>
      <td>&nbsp;$row->emppaddr</td>
      <td>&nbsp;$row->empperaddr</td>
    </tr>";
}

echo "  </table>
</form>";

?>

