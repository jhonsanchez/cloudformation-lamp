<?php 
$link = mysqli_connect('10.0.2.190', 'wordpress', 'Breast35b.'); 
if (!$link) { 
die('Could not connect: ' . mysqli_error()); 
} 
echo 'Connected successfully'; 
mysqli_close($link); 
?>



mysql -u root -pBreast35b. -e CREATE DATABASE wordpress-db;


<?php
$servername = "10.0.2.190";
$username = "wordpress";
$password = "Breast35b.";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 



CREATE USER 'wordpress'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';
GRANT ALL PRIVILEGES ON *.* TO 'wordpress'@'localhost' WITH GRANT OPTION;

CREATE USER 'wordpress'@'%' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';
GRANT ALL PRIVILEGES ON *.* TO 'wordpress'@'%' WITH GRANT OPTION;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';


ALTER USER root IDENTIFIED WITH mysql_native_password BY 'Breast35b.';


ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';
ALTER USER 'wordpress'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';
ALTER USER 'wordpress'@'%' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'Breast35b.';


usuario WordPress 
adminbp
clave wordpress
#2d(5V!XvMTW5ki4uM