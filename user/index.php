<?php 
session_start();
require_once("./auxiliaries.php");
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
  header("location: login.php");
  exit();
}


require_once("./head.php");


?>
<?php require_once("./auxiliaries.php");
//$_SESSION['email'] = $email;
//userLogin($email);

userIsLogin();



?>
  <body>
    <?php require_once("./side-bar.php");?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <?php require_once("./header.php");?>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <?php //require_once("./dashboard.php");?>
        <!-- dashboard ends here -->
          <!-- /.row-->
         <h4 class="text-primary text-justify">Welcome to Vodafone Fiber Broadband Complaints System.</h4>
         <p>Feel Free to make your complains and queries.</p>
          </div>
          <!-- /.row-->
          <?php // require_once("./trafficsales.php");?>
                    <!-- /.col-->
                  </div>
                  <!-- /.row--><br>
            <?php //require_once("./userstable.php");?>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    <?php require_once("./footer.php");?>