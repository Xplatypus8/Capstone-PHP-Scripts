<?php
require "connection_info.php";

$mysql_qry = "SELECT * FROM accountsTable;";

$result = mysqli_query($connection_info, $mysql_qry);

if(mysqli_num_rows($result) > 0){
for($i = 0; $i < mysqli_num_rows($result); $i++){
  $row = $result->fetch_row();
  // @ symbolizes the end of the line.
  echo $row[0], ",", $row[1], ",", $row[3], ",", $row[4], ",", $row[5], "@";
}
}
else{
  echo "failure";
}

?>
