<?php
$stmt="CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL ,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    role TINYINT(2) NOT NULL,
    status TINYINT(1) NOT NULL,
    UNIQUE (username),
    UNIQUE (email)    
)";
include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{	echo "Table Created Successfully";}
else {echo "Error Creating table or might be exist";
}
$stmt="CREATE TABLE IF NOT EXITS post(
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