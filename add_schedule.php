<?php
require "connection_info.php";

$date = $_POST["date"];
$location = $_POST["location"];

$mysql_qry = "INSERT INTO scheduleTable (locationID, employeeOne, employeeTWO, date) VALUES ('$location', unassigned, unassigned, '$date');";

if($connection_info->query($mysql_qry)===TRUE){
  $mysql_qry2 = "SELECT id FROM scheduleTable WHERE locationID LIKE '$location' AND employeeOne Like unassigned AND employeeTWO LIKE unassigned AND date LIKE '$date';";
  $result = mysqli_query($connection_info, $mysql_qry2);
  if(mysqli_num_rows($result) > 0){
  for($i = 0; $i < mysqli_num_rows($result); $i++){
    $row = $result->fetch_row();
    echo $row[0];
  }
  }
  else{
    echo "failure";
  }

}
else{
  echo "failure";
}
$connection_info->close();
 ?>
