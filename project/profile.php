<?php
session_start();
require_once ("config.php");

if (!isset($_SESSION['UN'])) {
   header("Location:login.php");
}
else {
  $name=$_SESSION['UN'];
}
if (isset($_GET['name'])) {
  $username=$_GET['name'];
}
$query="select * from info where name='$username'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);
echo "$row[name]";
echo "<br>";
echo "$row[email]";
echo "<br>";
echo "<img src=\"$row[photo]\"/>";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<br><a href="edit.php">update</a>
  </body>
</html>
