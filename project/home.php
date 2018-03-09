<?php
session_start();
require_once ("config.php");
if (!isset($_SESSION['UN'])) {

header("Location:login.php");
}
else {
  $name=$_SESSION['UN'];
  echo "welcome " .$name;
}

 ?>
 <!DOCTYPE html>
 <html>
<body>
    <form class="" action="logout.php" method="post">
      <input type="submit" name="" value="Logout">
    </form>
    <a href="profile.php?name=<?php echo"$name";?>">Profile</a>
</body>
 </html>
