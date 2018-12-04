<?php
require "connection_info.php";
$username = $_POST["username"];
$password = $_POST["password"];
$user_type = $_POST["userType"];
$first_name = $_POST["firstName"];
$last_name = $_POST["lastName"];

$mysql_qry = "insert into accountsTable (username, password, position, firstName, lastName) values ('$username', '$password', '$user_type', '$first_name', '$last_name');";

if($connection_info->query($mysql_qry) === TRUE){
echo "success";
}
else{
echo "failure";
}
$connection_info->close();
?>
