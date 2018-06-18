<?php
  require("connect.php");

  $sname = $_POST["sname"];
  $pname = $_POST["pname"];
  $street = $_POST["street"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $grade = $_POST["grade"];
  $home = $_POST["home"];
  $cell = $_POST["cell"];
  $bday = $_POST["bday"];
  $training = $_POST["training"];
  $classes = $_POST["classes"];
  $email = $_POST["email"];
  $subt = $_POST["subt"];

  $sql = "insert into registration(sname, pname, classes, street, city, state, zip, grade, home, cell, bday, training, email) values($sname, $pname, $classes, $street, $city, $state, $zip, $grade, $home, $cell, $bday, $training, $email)";
  if(mysqli_query($con, $sql)){
    //forward
  }else{
    echo "Error: " . mysqli_error($con);
  }
?>
