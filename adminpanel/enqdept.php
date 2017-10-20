<?php 
include("DBconnect.php");
$rs=mysqli_query($con,"select * from deptinfo order by deptname asc");
echo "<form name='form1' method='post' action=''>
  <table width='1032' height='77' border='1' align='center'>
    <tr>
      <th colspan='7' scope='col'>Department Information </th>
    </tr>
    <tr>
      <td>Department name </td>
      <td>Department address </td>
      <td>Department contact </td>
      <td>Department email </td>
      <td>Department website </td>
      <td>Total employee </td>
      <td>Total organisation </td>
    </tr>";

while($row=mysqli_fetch_object($rs))
{
    echo "<tr>
      <td>&nbsp;$row->deptname</td>
      <td>&nbsp;$row->deptaddr</td>
      <td>&nbsp;$row->dcontact</td>
      <td>&nbsp;$row->demail</td>
      <td>&nbsp;$row->dwebsite</td>
      <td>&nbsp;$row->toemp</td>
      <td>&nbsp;$row->toorg</td>
    </tr>";
}

echo "  </table>
</form>";

?>





