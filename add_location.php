<?php
require "connection_info.php";

$location = $_POST["loc"];

$mysql_qry = "INSERT INTO locationsTable (locationName) VALUES ('$location');";

if($connection_info->query($mysql_qry)===TRUE){
  echo "success";
}
else{
  echo "failure";
}
$connection_info->close();
 ?>
