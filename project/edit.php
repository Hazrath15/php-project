<?php
session_start();
require_once ("config.php");
if(! isset($_SESSION['UN']))
{
  header("Location:profile.php");
}
else {
  $name=$_SESSION['UN'];
  //$password=$_SESSION[PS];
}
$query="select * from info where name='$name'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="update.php" method="post" enctype="multipart/form-data">
       <input type="text" name="name" placeholder="<?php echo $row['name']?>"required><br>
       <input type="email" name="email" placeholder="<?php echo $row['email']?>"required><br>
       <input type="password" name="password" value="<?php echo $row['password']?>"required><br>
       <input type="file" name="image" value="<?php echo $row['photo']?>"required><br>
       <input type="submit" name="update" value="submit">

     </form>
   </body>
 </html>
