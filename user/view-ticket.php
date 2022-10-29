<?php require_once("./head.php");?>
<?php require_once("./auxiliaries.php");
//$_SESSION['email'] = $email;
//userLogin($email);

session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
  header("location: login.php");
  exit();
}
$customerNumberSess =  $_SESSION['customerNumber'];
//userIsLogin();



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
                          <th scope="col">Telephone</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Description</th>
                          <th scope="col">Status</th>
                          <th scope="col">Created At</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php

                            
                        require_once("./config.php");
                            $sqlSelectComplains = "SELECT * FROM complains WHERE customerNumber = '$customerNumberSess'";
                            $statement = $conn->prepare($sqlSelectComplains);
                            $statement->execute();
                            $results = $statement->rowCount();
                            $rows = $statement->fetchAll();

                          

                            foreach($rows as $row){
                               
                                $customerNumber = $row['customerNumber'];
                                $telephone = $row['telephone'];
                                $priority = $row['priority']; 
                                $description = $row['description'];
                                $status = $row['status'];
                                $createdAt = $row['createdAt'];
                                
                                if($row['status'] == 1){
                                  $status = "<span class='badge bg-warning'>Open</span>";
                                }elseif ($row['status'] == 0) {
                                  $status = "<span class='badge bg-danger'>Close</span>";
                                } else {
                                  $status = "<span class='badge bg-success'>None</span>";
                                }
                                

                                echo "
                                    <tr>
                                    <td>{$customerNumber}</td>
                                    <td>{$telephone}</td>
                                    <td>{$priority}</td>
                                    <td>{$description}</td>
                                    <td>{$status}</td>
                                    <td>{$createdAt}</td>
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