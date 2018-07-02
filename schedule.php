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
      <div class="col m12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Classical Ballet</span>
            <p>Ballet is a fine art and requires a strong basic foundation. The Cecchetti method is a graded system of classical ballet which takes the student from the first lesson to solo status. Examinations are offered to test the student's proficiency within each of the grades. The exams provide them with an opportunity to perfect their technique and the satisfaction of knowing they have accomplished this goal. It is "Les Cher's" intent to provide this training through a progression of well-balanced technique classes. Click on a class link to learn more.</p>
            <p>Exam candidates are required to take a minimum of two classes per week and will be presented for an exam at the directors' discretion. Private lessons may be available to supplement classes for the purpose of extra instruction.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
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
            echo "<tr><td><a href='class.php?id=" . $row['schedule_id'] . "'>" . $row['class_name'] . "</a></td><td>" .
            $row['weekdays'] . "</td><td>" . $row['class_times'] . "</td><td>" .
            $row['teacher'] . "</td></tr>";
          }
        ?>
      </table>
    </div>
    <div class="row">
      <div class="col m12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Information for All Classes</span>
            <p> All returning students should register as soon as possible, due to limited class size.</p>
 <p>Complete the registration form and return with fee of $25.00 to "Les Cher" 1700 Albermarle Drive, Crofton, Md. 21114. </p>
 <p>Tuition includes up to two weeks of snow days if needed.
 Payment is due the first class of the semester. If your payment has not been received by the 3rd week of the semester, a $25 late fee will be charged.</p>

  <ul><li>1st Semester -  Sept. 10 - Jan. 11</li>
  <li>2nd Semester - Jan. 14- May 17</li></ul>

 <p>Classes may be combined, canceled, or rates may be adjusted if there are less than 6 students. Classes will begin promptly at the scheduled times.
 Students interested in receiving private, or semi-private classes, must be attending our classes regularly.
 Students arriving more than 15 minutes late will be observing rather than dancing to prevent possible injury.</p>

 <p>Closings</p>
 <ul><li>Thanksgiving - Nov. 19 - Nov. 23</li>
 <li>Christmas - Dec. 24 - Jan. 4</li>
 <li>Classes resume Monday, January 7, 2019</li>
 <li>Easter - April 22 - April 26</li></ul>

<p> We will follow Prince George's County school closings, early dismissals, and cancellation of evening activities due to inclement weather.
 If in doubt, please contact us.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <table class="bordered resposive-table centered">
        <tr>
          <th>Hours</th>
          <th>Regular Price</th>
        </tr>
        <?php
          $sql2 = "select * from tuition";
          $result2 = mysqli_query($con, $sql2);
          while($row=mysqli_fetch_assoc($result2)){
            $hours = $row['time'];
            $price = "$" . $row['cost'] . ".00";
            echo "<tr><td>$hours</td><td>$price</td></tr>";
          }
         ?>
      </table>
    </div>
    <div class="row">
      <div class="col m12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Sibling Discount</span>
            <p>
              <p>A 10% discount for siblings is offered on each semester tuition. Tuition checks should be made out to "Les Cher". Please designate on check the student's full name and what the payment is for. Tuition is based on hours per week, per student. If your child takes two 1½-hour classes, that is 3 hours. There are no refunds. Checks that do not clear the bank, will be charged $25. Any questions please contact us.</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <p>
        Can't wait for a check to go through? Hit the button below to pay with Paypal!
      </p>
      <a class="btn-large" href="register.php">Register</a>
    </div>
  </div>
</center></body>
</html>
