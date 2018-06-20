<?php
  session_start();
  require('connect.php');

  $sql = "select * from account where user='" . $_POST['user'] . "' and pass='" . $_POST['pass'];
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows > 0){
    //login
    header("location: aHome.php");
  }else{
    //kick out
  }
?>
