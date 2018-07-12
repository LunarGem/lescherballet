<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
        Les Cher Ballet
    </title>
    <?php include("head.php");?>
    <script>
      $(document).ready(function(){
       $('.carousel').carousel();
       $('.modal').modal();
      });
    </script>

    <body onresize="javascript:dynamo()" onload="javascript:dynamo();">
      <?php include('cornerbar.php'); ?>
    <center>
    <div class="container">
      <div class="content"></div>
      <?php include('header.php'); ?>
      <br/>
      <div class="row">
        <div class="col m12">
          <div class="carousel">
            <?php
              $sql = "select * from gallery";
              $results = mysqli_query($con, $sql);
              $modals = "";
              while($row=mysqli_fetch_assoc($results)){
                $image = $row['image_url'];
                $id = $row['image_id'];
                echo "<a class='carousel-item modal-trigger' href='#modal$id'><img src='images/$image'></a>";
                $modals = $modals . "<div id='modal$id' class='modal' style='overflow: hidden; padding: 0;'><div class='modal-content' style='padding: 0;'><img src='images/$image' style='width: 750px;'/></div><div class='modal-footer'><a href='#!' class='modal-close waves-effect waves-gray btn-flat'><i class='material-icons'>close</i></a></div></div>";
              }
             ?>
          </div>
          <?php echo $modals;?>
        </div>
      </div>
      <div class="row">
        <?php include('footer.php'); ?>
      </div>
    </div>
  </center></body>
</html>
