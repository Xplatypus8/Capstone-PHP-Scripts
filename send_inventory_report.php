<?php
require "connection_info.php";
$location = $_POST["loc"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];

$loc_qry = "select id from locationsTable where locationName like '$location';";
$result = mysqli_query($connection_info, $loc_qry);
$row = $result -> fetch_row();
$location_id = $row[0];

$mysql_qry = "insert into inventoryTable (location, product, quantity, date) values ('$location_id', '$product', '$quantity', CURDATE() + 1);";
if($connection_info->query($mysql_qry)===TRUE){
echo "success";
}
else{
echo "failure";
}
$connection_info->close();
?>
