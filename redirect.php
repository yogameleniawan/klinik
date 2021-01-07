<html>

<body>
   <?php
   header("Location:login.php");
   ?>
   <p>Logout proccess wait a minutes.</p>
</body>

</html>
<?php
session_start();
session_destroy();
?>