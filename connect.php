<?php
  $con = new mysqli('localhost', 'root', '', 'lescherballet');
  if($con->connect_error){
    die("Connection error: " . $con->connect_error);
  }
 ?>
