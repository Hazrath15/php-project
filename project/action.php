<?php
require_once("config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
if($_FILES['image']['name'])
{
$file=$_FILES['image']['name'];
$path="image/".$file;
$tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp,$path);
echo "$path";
}
else {
  echo "not inserted";
}
$password=sha1($password);
$query="insert into info values('','$name','$email','$password','$path')";
$send=mysqli_query($connection,$query);

if ($send) {
  //echo "inserted";
}
else {
//  echo "not inserted";
}

 ?>
