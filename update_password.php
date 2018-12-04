<?php
require "connection_info";

$id = $_POST["id"];
$password = $_POST["password"];

$mysql_qry = "UPDATE accountsTable SET password = '$password' WHERE id LIKE '$id';";

if($connection_info->query($mysql_qry)===TRUE){
  echo "success";
}
else{
  echo "failure";
}
$connection_info->close();
?>
