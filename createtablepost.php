<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS post(
id INT AUTO_INCREMENT PRIMARY KEY,
post_id tinyint(4) NOT NULL,
user_id tinyint(4) NOT NULL,
status tinyint(1) NOT NULL
)";
include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{  echo "Table Created Successfully";}
else { echo "Error Creating table or might be exist";
}
mysqli_close($conn);
?>