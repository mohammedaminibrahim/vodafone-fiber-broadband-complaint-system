

                    <?php require_once("./head.php");?>
  <body>
    <?php require_once("./side-bar.php");?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <?php require_once("./header.php");?>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
         
        <!-- dashboard ends here -->
          <!-- /.row-->
         
          <!-- /.card.mb-4-->
         
            <!-- /.col-->
          </div>
          <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-681">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Customer Number</th>
                          <th scope="col">Fullname</th>
                          <th scope="col">Email</th>
                          <th scope="col">Ghana Card</th>
                          <th scope="col">Location</th>
                          <th scope="col">Nearest Landmark</th>
                          <th scope="col">Phone</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        require_once("./config.php");
                            //query to select all from customer 
                            $sqlSelectCustomers = "SELECT * FROM customers";
                            $statement = $conn->prepare($sqlSelectCustomers);
                            $results = $statement->execute();
                            $rows = $statement->fetchAll();

                            foreach($rows as $row){
                                $id = $row['id'];
                                $customerNumber = $row['customerNumber'];
                                $fullname = $row['fullname'];
                                $email = $row['email'];
                                $ghanaCard = $row['ghanaCard'];
                                $location = $row['location'];
                                $nearestLandmark = $row['landmark'];
                                $phone = $row['phone'];


                                echo "
                                <tr>
                                    <td>{$id}</td>
                                    <td>{$customerNumber}</td>
                                    <td>{$fullname}</td>
                                    <td>{$email}</td>
                                    <td>{$ghanaCard}</td>
                                    <td>{$location}</td>
                                    <td>{$nearestLandmark}</td>
                                    <td>{$phone}</td>
                                    
                                </tr>";
                            }
                        
                        ;?>
                      </tbody>
                    </table>
                  </div>
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