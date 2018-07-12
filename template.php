<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
        Les Cher Ballet
    </title>
    <?php include("head.php");?>

    <body onresize="javascript:dynamo()" onload="javascript:dynamo();">
      <?php include('cornerbar.php'); ?>
    <center>
    <div class="container">
      <div class="content"></div>
      <?php include('header.php'); ?>
      <br/>
      <!--new content here -->
      <div class="row">
        <?php include('footer.php'); ?>
      </div>
    </div>
  </center></body>
</html>
