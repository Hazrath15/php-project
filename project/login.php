<?php

session_start();
if (isset($_SESSION['UN'])) {
  header("Location:home.php");
}

 ?>

<!DOCTYPE html>
<html>
<body>
  <form class="" action="process.php" method="post">
    <input type="text" name="name" value=""required><br>

   <input type="password" name="password" value=""required><br>
  <input type="submit" name="" value="login">
<?php
  if (isset($_GET['value'])) {
    echo "wrong user id or password";
  }
?>

  </form>


</body>
</html>
