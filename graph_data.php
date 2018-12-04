<?php
require "connection_info.php";
$start_date = $_POST["startDate"];
$end_date = $_POST["endDate"];
$location = $_POST["loc"];

$mysql_qry = "select * from financialTable where locationID like '$location' and date between '$start_date' and '$end_date';";
$result = mysqli_query($connection_info, $mysql_qry);
if(mysqli_num_rows($result) > 0){
for($i = 0; $i < mysqli_num_rows($result); $i++){
$row = $result->fetch_row();
echo $row[0], ",", $row[1], ",",$row[2], ",", $row[3], ",", $row[4], ",", $row[5], "@";
}
}
else{
echo "failure";
}
?>
