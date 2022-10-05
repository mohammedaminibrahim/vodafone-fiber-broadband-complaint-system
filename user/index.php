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
      
            <?php 
            require_once("./config.php");
            $customerNumber = $_SESSION['customerNumber'];
            $sqlSelect = "SELECT * FROM customers WHERE customerNumber = '$customerNumber'";
            $statement = $conn->prepare($sqlSelect);
            $results = $statement->execute();
            $rows = $statement->rowCount();
            $columns = $statement->fetchAll();

            foreach($columns as $column) :?>

          <div class="alert alert-danger" role="alert">
          <p class="h3 alert-heading">Vodafone Fiber Broadband Management System.
            <img src="./assets/vodafone.png" style="width: 15%; height: 15%;" alt="" srcset="">
          </p>
          <hr>
              <div class="container">
                <div class="row">
                  <div class="col-6">
                            <p class="mb-0">
                      <h3 class="text-warning">Customer Number:</h3>
                      <?php echo $column['customerNumber'];?>  

                      <h3 class="text-warning">Customer Fullname:</h3>
                      <?php echo $column['fullname'];?>  

                      <h3 class="text-warning">Customer GHANA CARD:</h3>
                      <?php echo $column['ghanaCard'];?> 

                      <h3 class="text-warning">Customer Email:</h3>
                      <?php echo $_SESSION['email'];?>  

                    </p>
                  </div>
                  <div class="col-6">
                    
                  <h3 class="text-warning">Customer Telephone:</h3>
                      <?php echo $column['phone'];?>  

                      <h3 class="text-warning">Customer Location:</h3>
                      <?php echo $column['location'];?>  

                      <h3 class="text-warning">Customer's Nearest Landmark:</h3>
                      <?php echo $column['landmark'];?> 
                  </div>
                </div>
              </div>
          </div>

          <?php endforeach;?>

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