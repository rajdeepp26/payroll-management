<?php 
include("DBconnect.php");
$rs1=mysqli_query($con,"select * from earnings order by da asc");
$rs2=mysqli_query($con,"select * from ptaxdeduction order by gd1 asc");

echo "<form name='form1' method='post' action=''>
  <p>&nbsp;</p>
  <table width='917' border='1' align='center'>
    <tr>
      <th colspan='3' scope='col'>Earnings</th>
    </tr>
    <tr>
      <td>Dearness allowance </td>
      <td>House rent allowance </td>
      <td>Medical allowance </td>
    </tr>";
	while($row1=mysqli_fetch_object($rs1))
{
	echo "<tr>
      <td>&nbsp;$row1->da</td>
      <td>&nbsp;$row1->hra</td>
      <td>&nbsp;$row1->ma</td>
    </tr>";
}
echo "</table>
 	
    <p>&nbsp;</p>
    <p>&nbsp;</p>";
	
	echo "  <table width='920' border='1' align='center'>
    <tr>
      <th colspan='4' scope='col'>Deduction</th>
    </tr>
    <tr>
      <td width='217'>P.tax-Grade 1</td>
      <td width='226'>P.tax-Grade 2 </td>
      <td width='226'>P.tax-Grade 3 </td>
      <td width='222'>P.tax-Grade 4 </td>
    </tr>";

while($row2=mysqli_fetch_object($rs2))
{
echo "<tr>
	  <td>&nbsp;$row2->gd1</td>
      <td>&nbsp;$row2->gd2</td>
      <td>&nbsp;$row2->gd3</td>
      <td>&nbsp;$row2->gd4</td>
    </tr>";
}

echo "</table>
</form>";


?>