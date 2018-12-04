<?php
require "connection_info.php";

$id = $_POST["id"];
$employee_one = $_POST["empOne"];
$employee_two = $_POST["empTwo"];

$mysql_qry = "UPDATE scheduleTable SET employeeOne = '$employee_one', employeeTWO = '$employee_two' WHERE id LIKE '$id';";

if($connection_info->query($mysql_qry)===TRUE){
  echo "success";
}
else{
  echo "failure";
}
$connection_info->close();
?>
