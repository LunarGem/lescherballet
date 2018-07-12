<?php require('connect.php'); session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>Les Cher: Log In</title>
    <?php include 'head.php';?>
  </head>
  <body onresize="javascript:dynamo()" onload="javascript:dynamo();"><center>
    <div class="container">
      <div class="content"></div>
      <?php include('header.php'); ?>
      <div class="row">
        <?php if(isset($_SESSION['msg'])){echo "<p>" . $_SESSION['msg'] . "</p>"; $_SESSION['msg'] = null;} ?>
        <div class="col s12 m4 offset-m4"><form name="login" action="processLogin.php" method="post">
          <div class="row">
            <div class="input-field col s12">
              <input type="text" id="user" name="user" required/>
              <label for="user">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="password" id="pass" name="pass" required/>
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
