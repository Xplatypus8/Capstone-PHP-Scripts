<?php
require "connection_info.php"
$id = $_POST["id"];
$cash = $_POST["cash"];
$credit = $_POST["credit"];
$location = $_POST["loc"];
$date = $_POST["date"];

$mysql_qry = "UPDATE financialTable SET cashAmount = '$cash', creditAmount = '$credit', locationID = '$location', date = '$date' WHERE id LIKE '$id';";

if($connection_info ->query($mysql_qry)===TRUE){
  echo "success";
}
else{
  echo "failure";
}
$connection_info->close();
?>
