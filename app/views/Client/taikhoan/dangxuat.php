<?php 
 unset($_SESSION['id']);
 unset($_SESSION['name']);
 unset($_SESSION['vai_tro']);

header("location: index.php");
?>