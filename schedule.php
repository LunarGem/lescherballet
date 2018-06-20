<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head><title>Classes</title>
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
  </head>
<body onresize="javascript:dynamo()" onload="javascript:dynamo();">
  <?php include('cornerbar.php'); ?>
  <center>
  <div class="container">
    <div class="content"></div>
  <?php include('header.php'); ?>
    <div class="row">
    <p>
    *stuff on regular site about art, uniforms, reqs etc*
    </p>
      <table class="bordered responsive-table centered">
        <tr style="text-align: center;">
          <th>Group</th>
          <th>Days</th>
          <th>Times</th>
          <th>Teacher</th>
        </tr>
        <?php
          $sql = "select * from schedule";
          $result = mysqli_query($con, $sql);
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td><a href='#'>" . $row['class_name'] . "</a></td><td>" .
            $row['weekdays'] . "</td><td>" . $row['class_times'] . "</td><td>" .
            $row['teacher'] . "</td></tr>";
          }
        ?>
      </table>
    </div>
    <div class="row">
      <p>
      *stuff about registration, semesters, due dates, discounts etc*
      </p>
      <table class="bordered resposive-table centered">
        <tr>
          <th>Hours</th>
          <th>Regular Price</th>
        </tr>
        <tr>
          <td>45 min - 1 hr/wk</td>
          <td>$219.00</td>
        </tr>
      </table>
    </div>
    <div class="row">
      <p>
        All revved up and ready to go? Hit the button below to pay with Paypal!
      </p>
      <a class="btn-large" href="register.php">Register</a>
    </div>
  </div>
</center></body>
</html>
