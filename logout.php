<?php
  session_start();
  session_unset();
  session_destroy();
  $_SESSION['msg'] = "Logged out successfully.";
  header('location: login.php');
?>
