<?php

  include("taconnect.php");
  $rs=mysql_query("select * from staff",$con);
  echo"<form name='form1' method='post' action=''>
  <table width='66%' align='center' style='box-shadow: 2px 2px #000000;'>";

  while($row=mysql_fetch_object($rs))
  
  {
  
   
    echo"Employee ID &nbsp;&nbsp;&nbsp;&nbsp;  			:"  .$row->eid."<br>";
    echo"Employee Name &nbsp;&nbsp;		    :"  .$row->empname."<br>";
	echo"Organisation Name&nbsp; 	    :"  .$row->orgname."<br>";
	echo"Designation &nbsp;&nbsp;           :"  .$row->designation."<br>";
	echo"Date of Joining &nbsp;&nbsp;       :"  .$row->doj."<br>";
	echo"Date of Retirement &nbsp;&nbsp;    :"  .$row->dor."<br>";
	echo"Date of Birth  &nbsp;&nbsp;        :"  .$row->dob."<br>";
	echo"Gender     &nbsp;&nbsp;            :"  .$row->gender."<br>";
	echo"Caste   &nbsp;&nbsp; &nbsp;               :"  .$row->caste."<br>";
	echo"email id   &nbsp;&nbsp;&nbsp; &nbsp;            :"  .$row->email."<br>";
	echo"Ph. No &nbsp;&nbsp;&nbsp; &nbsp;                :"  .$row->phnumber."<br>";
	echo"Permanent Address &nbsp;&nbsp;&nbsp;      :"  .$row->paddress."<br>";
	echo"Correspondence Address&nbsp;&nbsp;&nbsp;  :"  .$row->caddress."<br>";
	echo"Password&nbsp;&nbsp;&nbsp;  :"  .$row->pwd."<br>";
	
 }
  
  
  ?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
