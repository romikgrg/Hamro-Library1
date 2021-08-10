<?php
  session_start();
  ?>
  <?php
  include "connection.php";
  echo "Welcome ".$_SESSION['login_user']; 
?>
<html>
  <body>
    
  </body>
</html>
