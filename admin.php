<?php
  if(!isset($_SESSION['id'])){
    $_SESSION['msg'] = "This section is admin only. Please sign in.";
    header("location: login.php");
  }
?>
