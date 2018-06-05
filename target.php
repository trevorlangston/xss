<?php
session_start();
header("X-XSS-Protection: 0");
?>

<html>
  <body>
    <h1> I am the target! </h1>
    <p> <?php echo $_GET['foo']?></p>
  </body>
</html>
