<?php 
session_start();
require_once("./auxiliaries.php");
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
  header("location: login.php");
  exit();
}


  require_once("./head.php");?>
  <body>
    
    <?php require_once("./side-bar.php");?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <?php require_once("./header.php");?>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
        <?php  print_r($_SESSION['email']);?>
          <?php require_once("./dashboard.php");?>
        <!-- dashboard ends here -->
          <!-- /.row-->
          <?php //require_once("./traffic.php");?>
          <!-- /.card.mb-4-->
       
            <!-- /.col-->
          </div>
          <!-- /.row-->
        
                    <!-- /.col-->
                  </div>
                  <!-- /.row--><br>
       
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    <?php require_once("./footer.php");?>