<?php
require "connection_info.php";
$username = $_POST["username"];
$password = $_POST["password"];
$mysql_qry = "select id, username, position, firstName, lastName from accountsTable where username like '$username' and password like '$password';";
$result = mysqli_query($connection_info, $mysql_qry);
if(mysqli_num_rows($result) > 0){
$row = $result->fetch_row();
echo $row[0], ",", $row[1], ",",$row[2], ",", $row[3], ",", $row[4];
}
else{
echo "login failed";
}
?>
