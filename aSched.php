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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
          <?php
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              $_SESSION['msg'] = null;
            }
          ?>
          <table class="bordered responive-table centered">
            <tr>
              <th>Class Name</th>
              <th>Weekdays</th>
              <th>Class Times</th>
              <th>Teacher</th>
              <th>Action</th>
            </tr>
            <?php
              $sql = "select * from schedule";
              $result = mysqli_query($con, $sql);
              while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $row['class_name'] . "</td><td>" . $row['weekdays'] . "</td><td>" . $row['class_times'] . "</td><td>" . $row['teacher'] . "</td><td><a href='editSched.php?id=" . $row['schedule_id'] . "'><i class='material-icons'>edit</i></a><a href='deleteSched.php?id=" . $row['schedule_id'] . "'><i class='material-icons'>delete</i></a></td></tr>";
              }
            ?>
            <tr>
              <td colspan="5"><a href="addSched.php"><i class="material-icons">add_box</i></a></th>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <?php include('footer.php'); ?>
      </div>
    </div>
  </center></body>
</html>
