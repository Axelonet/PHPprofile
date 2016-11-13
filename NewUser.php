<?php

define('DB_NAME', 'csi');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Error connecting with MySQL server: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link); 

if (!$db_selected) {
	die('Error connecting with database '. DB_NAME .' :' . mysql_error());
}

$name = $_POST['name'];
$username = $_POST['newusername'];
$password = $_POST['newpassword'];

$result = "INSERT INTO session (NAME, PASSWORD) VALUES ('$username', '$password')";


if (!mysql_query($result)) {
	die('Error during inserting values : '.mysql_error()); 
}

echo "Thank you for registering! You can login to view the webpage now.";

mysql_close();
?>