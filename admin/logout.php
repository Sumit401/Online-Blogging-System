<?php 
// destroying session in php
session_start();
session_destroy();
echo "<script>alert('Sucessfully Logged Out!')</script>";
echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/index.php';\",50);</script>";
 ?>