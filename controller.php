<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

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

$sql="SELECT * FROM session WHERE NAME='".$username."' and PASSWORD = '".$password."' ";

$result=mysql_query($sql);

$row = mysql_num_rows($result);

if( $row  == 1 )
{
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header('location:system.html');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
    }

?>
