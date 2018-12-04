<?php
require "connection_info.php";
$id = $_POST["id"];

$mysql_qry ="DELETE FROM financialTable WHERE id like '$id';";
if($connection_info->query($mysql_qry)===TRUE){
  echo "success";
}
else{
  echo "failure";
}
$connection_info->close();

 ?>
