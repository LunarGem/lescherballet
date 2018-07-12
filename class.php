<?php require('connect.php'); ?>
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
      <?php include('header.php'); ?>
      <br/>
      <div class="row">
        <?php
          $id = $_GET['id'];
          $sql = "select * from schedule where schedule_id=$id";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_assoc($result);
          $content = $row['class_content'];
          $name = $row['class_name'];
          $days = $row['weekdays'];
          $times = $row['class_times'];
          $teacher = $row['teacher'];
          $image = $row['image'];
         ?>
        <div class="col s12 m8 offset-m2">
          <div class="card horizontal small">
            <div class="card-image">
              <img src="images/<?php echo $image;?>"/>
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <table class="bordered responsive-table centered">
                  <tr>
                    <th><?php echo $name; ?></th>
                    <td>Taught by <?php echo $teacher; ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $days;?></td>
                    <td><?php echo $times;?></td>
                  </tr>
                </table>
                <br/>
                <p><?php echo $content; ?></p>
              </div>
              <div class="card-action">
                <a href="schedule.php">Back to Schedule</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php include('footer.php'); ?>
      </div>
    </div>
  </center></body>
</html>
