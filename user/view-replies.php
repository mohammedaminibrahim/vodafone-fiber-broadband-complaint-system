<?php 
session_start();
require_once("./head.php");?>
<?php require_once("./auxiliaries.php");
//$_SESSION['email'] = $email;
//userLogin($email);





?>
  <body>
    <?php 
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
      header("location: login.php");
      exit();
    }
    require_once("./side-bar.php");?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <?php require_once("./header.php");?>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <?php //require_once("./dashboard.php");?>
        <!-- dashboard ends here -->
          <!-- /.row-->
         
          </div>
          <!-- /.row-->
          <?php // require_once("./trafficsales.php");?>
                    <!-- /.col-->

                    

                    <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-681">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Customer Number</th>
                          <th scope="col">Replied Message</th>
                          <th scope="col">Created At</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php



                          

                            require_once("./config.php");
                            $customerNumber = $_SESSION['customerNumber'];
                            $sqlSelectComplains = "SELECT * FROM reply WHERE customerNumber = '$customerNumber'";
                            $statement = $conn->prepare($sqlSelectComplains);
                            $statement->execute();
                            $results = $statement->rowCount();
                            $rows = $statement->fetchAll();

                          

                            foreach($rows as $row){
                                $id = $row['id'];
                                $customerNumber = $row['customerNumber'];
                                $message = $row['repliedtext'];
                                $dateCreated = $row['dateCreated'];
                                
                                

                                echo "
                                    <tr>
                                    <td>{$id}</td>
                                    <td>{$customerNumber}</td>
                                    <td>{$message}</td>
                                    <td>{$dateCreated}</td>
                                    </tr>
                                ";
                            }
                        
                        
                        ;?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>


            </div>
                  <!-- /.row--><br>
            <?php //require_once("./userstable.php");?>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    <?php require_once("./footer.php");?>