<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
        Les Cher Ballet
    </title>
    <?php include 'head.php';?>

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
              <div class="card-content copy">
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
