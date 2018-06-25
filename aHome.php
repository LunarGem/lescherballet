<?php require('connect.php'); session_start(); require('admin.php');?>
<!DOCTYPE html>
<html>
  <head>
    <title>
        Les Cher Ballet
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      function dynamo(){
        $('.content').height($('.container').height());
        $('.content').width($('.container').width());
      }
    </script>

    <body onresize="javascript:dynamo()" onload="javascript:dynamo();">
      <?php include('cornerbar.php'); ?>
    <center>
    <div class="container">
      <div class="content"></div>
      <?php include('aHeader.php'); ?>
      <br/>
      <div class="row">
        <div class="col m12">
          <a class="btn" href="aSched.php">Change the class schedule</a><br/>
          <a class="btn" href="announce.php">Send out an announcement</a><br/>
          <a class="btn" href="news.php">Add news</a><br/>
          <a class="btn" href="tuition.php">Edit tuition</a><br/>
          <a class="btn" href="roster.php">See registrations</a>
        </div>
      </div>
      <div class="row">
        <?php include('footer.php'); ?>
      </div>
    </div>
  </center></body>
</html>
