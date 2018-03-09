<?php
session_start();
require_once ("config.php");
if(!isset($_SESSION['UN']))
{
   header("Location:login.php");
}
else
{
   $name=$_SESSION['UN'];
}
$uname=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$password=sha1($password);

$file=$_FILES['image']['name'];
$path="image/".$file;
$tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp,$path);

$query="UPDATE info SET  name='$uname' , password='$password',photo='$path', email='$email' WHERE name='$name'";
$send=mysqli_query($connection,$query);
if($send)
{
  $_SESSION['UN']=$uname;
  $_SESSION['PS']=$password;
  echo "Updated";
}




 ?>
