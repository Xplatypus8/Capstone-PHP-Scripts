<?php
require "connection_info.php";
$user_id = $_POST["userID"];
$location = $_POST["loc"];
$cash_amount = $_POST["cash"];
$credit_amount = $_POST["credit"];
$date = $_POST["date"];

$loc_qry = "select id from locationsTable where locationName like '$location';";
$result = mysqli_query($connection_info, $loc_qry);
$row = $result -> fetch_row();
$location_id = $row[0];

$mysql_qry = "insert into financialTable (locationID, userID, cashAmount, creditAmount, date) values ('$location_id', '$user_id', '$cash_amount', '$credit_amount', '$date');";
if($connection_info->query($mysql_qry)===TRUE){
echo "success";
}
else{
echo "failure";
}
$connection_info->close();
?>
