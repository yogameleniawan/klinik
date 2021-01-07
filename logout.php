<?php
session_start();
session_destroy();
header("location:redirect.php?page=logout");
exit();
