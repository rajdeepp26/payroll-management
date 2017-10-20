<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $empid=$_POST["empid"];
	 $ename=$_POST["ename"];
     $edesig=$_POST["edesig"];
	 $empgrade=trim($_POST["empgrade"]);
	 $emporg=$_POST["emporg"];
	 $deptname=trim($_POST["deptname"]);
	 $doj=$_POST["doj"];
	 $dor=$_POST["dor"];
	 $dob=$_POST["dob"];
	 $empcaste=$_POST["empcaste"];
	 $empemail=$_POST["empemail"];
	 $empphone=$_POST["emphone"];
	 $empage=$_POST["empage"];
	 $empgender=$_POST["empgender"];
	  $empmstat=$_POST["empmstat"];
	  $mname=$_POST["mname"];
	  $fname=$_POST["fname"];
	  
	  $emppaddr=$_POST["emppaddr"];
	  $empperaddr=$_POST["empperaddr"];
    
	
	   $empgradepay=0;
	   $basicpay=0;
	 $rs1=mysqli_query($con,"select * from payscale where  empgrade='$empgrade'  && deptname='$deptname' ");
 	if(mysqli_num_rows($rs1)>0)
	 {
	 	if($row1=mysqli_fetch_object($rs1))
	 	{
	   		$empgradepay=$row1->empgradepay;
	   		$basicpay=$row1->startbasicp;
	 	}
	 }
	 else
	 {
		 echo"no record";
	 }
		
		
	 $rs=mysqli_query($con,"insert into empinfo values('$empid','$ename','$edesig','$empgrade','$emporg','$deptname','$doj','$dor','$dob','$basicpay','$empgradepay','$empcaste','$empemail','$empphone','$empage','$empgender','$empmstat','$mname','$fname','$emppaddr','$empperaddr')");
	 if($rs)
	 {
	      echo"<script>alert('saved')</script>";
	 }
	 else
	 {
	      echo"<script>alert('not saved')</script>";
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
  <table width="615" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Employee Information </div></td>
    </tr>
    <tr>
      <td width="276">Employee's id </td>
      <td width="323">        <input name="empid" type="text" id="empid" required></td>
    </tr>
    <tr>
      <td>Employee's name </td>
      <td><input name="ename" type="text" id="ename" required></td>
    </tr>
    <tr>
      <td>Employee's designator </td>
      <td><input name="edesig" type="text" id="edesig" required></td>
    </tr>
    <tr>
      <td>Employee's grade </td>
      <td>        <select name="empgrade" id="empgrade" >
        <option>select</option>
        <option>Grade-I</option>
        <option>Grade-II</option>
        <option>Grade-III</option>
        <option>Grade-IV</option>
      </select></td>
    </tr>
    <tr>
      <td>Employee organisation </td>
      <td><input name="emporg" type="text" id="emporg" required > </td>
    </tr>
    <tr>
      <td>Department name </td>
      <td>        <select name="deptname" id="deptname" >
          <option>Select</option>
          <?php 
			include("dbconnect.php");
			$rs=mysqli_query($con,"select deptname from deptinfo order by deptname asc");
			while($row=mysqli_fetch_object($rs))
			{
				echo"<option>$row->deptname</option>";
			}
		
		
		?>
        </select></td>
    </tr>
    <tr>
      <td>Date of joining</td>
      <td>      <input name="doj" type="date" id="doj"></td>
    </tr>
    <tr>
      <td>Date of retirement </td>
      <td><input name="dor" type="date" id="dor"></td>
    </tr>
    <tr>
      <td>Date of birth</td>
      <td>      <input name="dob" type="date" id="dob"></td>
    </tr>
    <tr>
      <td>Employee's caste </td>
      <td><input name="empcaste" type="text" id="empcaste"></td>
    </tr>
    <tr>
      <td height="37">Employee's email-id</td>
      <td><input name="empemail" type="text" id="empemail"></td>
    </tr>
    <tr>
      <td>Employee's phone id </td>
      <td><input name="emphone" type="text" id="emphone">      </td>
    </tr>
    <tr>
      <td>employee's age </td>
      <td><input name="empage" type="text" id="empage"></td>
    </tr>
    <tr>
      <td>Employee's gender </td>
      <td>        <input name="empgender" type="radio" value="male">
MALE
<input name="empgender" type="radio" value="female">
FEMALE</td>
    </tr>
    <tr>
      <td>Marital status </td>
      <td><input name="empmstat" type="text" id="empmstat"></td>
    </tr>
    <tr>
      <td>Mother's name </td>
      <td>      <input name="mname" type="text" id="mname"></td>
    </tr>
    <tr>
      <td>Father's name </td>
      <td><input name="fname" type="text" id="fname"></td>
    </tr>
    <tr>
      <td>Employee's portal address </td>
      <td><textarea name="emppaddr" id="emppaddr"></textarea></td>
    </tr>
    <tr>
      <td>Employee's permanent address </td>
      <td><textarea name="empperaddr" id="empperaddr"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
</body>
</html>
