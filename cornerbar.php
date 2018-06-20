<div class="cornerbar">
  <?php if(!isset($_SESSION['id'])){
    echo "<a href='login.php' class='btn'>Admin? Sign in here!</a>";
  }else{
    echo "<a href='logout.php' class='btn'>Log Out</a>";
  }
  ?>
</div>
