<?php
  require('connect.php');
  session_start();
  $id = $_GET['id'];
  $sql = "delete from schedule where schedule_id = $id";
  $_SESSION['msg'] = "Successfully deleted.";
  header('location: aSched.php');
?>
