<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
die("DB connection error".mysqli_error());
}
$db_selected=mysqli_select_db($con,'payroll_management');
if(!$db_selected){
die("DB selection error!".mysqli_error());
}


?>