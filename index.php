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

    <body>
      <?php include('cornerbar.php'); ?>
    <center>
    <div class="container">
      <?php include('header.php'); ?>
      <br/>
      <div class="row">
        <div class="col s12 m4">
          <div class="card large">
            <div class="card-image">
              <img src="images/Les Cher 1.jpg"/>
              <span class="card-title">Our Founders</span>
            </div>
            <div class="card-content">
              <p>Founded in 1982, the name "Les Cher" is a faux-French port- manteau of the names of our two founders, Leslie Parreco and Cherry Dowsley (pictured above).</p>
            </div>
            <div class="card-action">
              <a href="#">Learn About Us</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card large">
            <div class="card-image">
              <img src="images/LEC_9981.jpg" style="width: 450px; left: -90px;">
              <span class="card-title">Classes</span>
            </div>
            <div class="card-content">
              <p>We offer classes in the evenings Mondays through Thursdays for students from the age of three to one hundred and three!</p>
            </div>
            <div class="card-action">
              <a href="schedule.php">Schedule</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card large">
            <div class="card-image">
              <img src="images/LEC_9621-2.jpg" style="width: 450px; left: -90px;"/>
              <span class="card-title">Gallery</span>
            </div>
            <div class="card-content">
              <p>See our students in their recital costumes from this year and past years!</p>
            </div>
            <div class="card-action">
              <a href="#">Showcase</a>
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
