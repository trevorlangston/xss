<?php
session_start();
header("X-XSS-Protection: 0");
?>

<html>
  <body>
    <h1> I am the target! </h1>
    <p> <?php echo $_GET['foo']?></p>
    <input value="<?php echo $_GET['bar']; ?>" />
    <br>
    <br>
    <img src="captcha.jpeg"/>
  </body>
</html>
