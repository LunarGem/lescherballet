<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>

    <title>
        Les Cher Ballet
    </title>
    <?php include("head.php");?>
    <body onresize="javascript:dynamo()" onload="javascript:dynamo();">
      <!--TODO: increase z-index somehow (goes behind cards on mobile)-->
      <?php include('cornerbar.php'); ?>
    <center>
    <div class="container">
      <div class="content"></div>
      <?php include('header.php'); ?>
      <br/>
      <div class="row">
        <div class="col s12 m4">
          <div class="card large">
            <div class="card-image">
              <img src="images/Les Cher 1.jpg"/>
              <span class="card-title">Our Founders</span>
            </div>
            <div class="card-content copy">
              <p>Founded in 1982, the name "Les Cher" is a faux-French port- manteau of the names of our two founders, Leslie Parreco and Cherry Dowsley (above).</p>
            </div>
            <div class="card-action">
              <a href="about.php">Learn About Us</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card large">
            <div class="card-image">
              <img src="images/LEC_9661.jpg" style="width: 450px; left: -90px;">
              <span class="card-title">Classes</span>
            </div>
            <div class="card-content copy">
              <p>We offer classes in the evenings Mondays through Thursdays for students from the age of two to one hundred and two!</p>
            </div>
            <div class="card-action">
              <a href="schedule.php">Schedule</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card large">
            <div class="card-image">
              <img src="images/LEC_9981.jpg" style="width: 450px; left: -90px;"/>
              <span class="card-title">Gallery</span>
            </div>
            <div class="card-content copy">
              <p>See our students in their recital costumes from this year and past years!</p>
            </div>
            <div class="card-action">
              <a href="showcase.php">Showcase</a>
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
