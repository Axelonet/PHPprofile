<?php session_start(); ?>
<html>
<head>
  <title>Working with Sessions in PHP - MrBool Tutorial</title>
<?php 

if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('location:index.php');
    }
 
$logged = $_SESSION['username'];

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>
<body>

  <table width="800" height="748" border="1">
  <tr>
    <td height="90" colspan="2" bgcolor="#CCCCCC">MrBool WebSystem

    <?php
    echo "Welcome".$logged."to the MrBool WebSystem";
    ?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">Navbar here</td>
    <td width="546">Content and icons here</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>

</body>
</html>
