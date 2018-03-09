<?php
require_once ("config.php");
session_start();
$name=$_POST['name'];
$password=$_POST['password'];
$password=sha1($password);
$query="select name,password from info where name='$name'and password='$password'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);
if ($name==$row['name'] and $password==$row['password']) {
  echo "print data";

  $_SESSION['UN']=$name;
  $_SESSION['PS']=$password;
 header("Location:home.php");

}
else {
  header("Location:login.php?value=fail");
}


 ?>
