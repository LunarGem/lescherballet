<?php require('connect.php');?>
<!DOCTYPE html>
<html>
  <head>
    <title>Les Cher: Log In</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </head>
  <body><center>
    <div class="container">
      <?php include('header.php'); ?>
      <div class="row">
        <div class="col s12 m4 offset-m4"><form name="login" action="processLogin.php" method="post">
          <div class="row">
            <div class="input-field col s12">
              <input type="text" id="user" required/>
              <label for="user">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="password" id="pass" required/>
              <label for="pass">Password</label>
            </div>
          </div>
          <div class="row">
            <input type="submit" class="btn" value="Log In"/>
          </div>
        </form></div>
      </div>
    </div>
  </center></body>
</html>
