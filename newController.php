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

$sql="SELECT * FROM session WHERE NAME='.$username.' and PASSWORD = 'md5(.$password.)' ";

$result=mysql_query($sql);
//This line implies that the sql query is fired and if the query works, the function returns 1 and 0 if it doesn't works
//So, in a basic approach, what you did is fired a search and select query on the db and now since the sql connnection is open the query works fine.
//Everytime you run it and mysql_quey($sql) returns 1, which makes the value of $result=1 everytime and $result>0 satisfies even if the credentials are wrong.

//----------------------------------------------------------------------------------------------------------------------------------------------------
//WHAT YOU NEED TO DO IS FIND THE NUMBER OF ROWS IN THE TABLE OF THE DB WITH THE MATCHING CREDENTIALS.
//----------------------------------------------------------------------------------------------------------------------------------------------------
//SOLUTION

$row = mysql_num_rows($result);//this line counts the number of rows returned by the sql query fired

if( $row  == 1 )//only one user is to be found, if multiple users found, terminate the session
//----------------------------------------------------------------------------------------------------------------------------------------------------

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
