<?php
// This flag causes the browser to look for suspicious code in the url and
// remove it from the page. We can turn this around and add code to the url
// that we want removed from the page.
//
// add <script> x=2; </script> to the url
header("X-XSS-Protection: 1");
?>

<html>
  <body>
    <script> var x=1; </script>
    <script> x=2; </script>
    <script> if (x==1) alert("hacked!"); </script>
  </body>
</html>
