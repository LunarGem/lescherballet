<?php
  session_start();
  require('connect.php');

  $sql = "select * from account where user='" . $_POST['user'] . "' and pass='" . $_POST['pass'] . "'";
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){
    $_SESSION['id'] = 1;
    header("location: aHome.php");
  }else{
    $_SESSION['msg'] = "Your username and/or password is incorrect. Please try again.";
    echo "User: " . $_POST['user'] . " Pass: " . $_POST['pass'];
    header("location: login.php");
  }
?>
