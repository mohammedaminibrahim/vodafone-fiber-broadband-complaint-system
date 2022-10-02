<?php require_once("./head.php");?>
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
         
          </div>
          <!-- /.row-->
          <?php // require_once("./trafficsales.php");?>
                    <!-- /.col-->

                        <?php

                            require_once("./config.php");

                            if(isset($_POST['submit'])){
                                $customerNumber = uniqid();
                                $telephone = $_POST['telephone'];
                                $priority = $_POST['priority'];
                                $description = $_POST['description'];
                                $status = 0;

                                if(!empty($customerNumber) && !empty($telephone) && !empty($priority) && !empty($description)){
                                    $sqlInsertComplain = "INSERT INTO complains(customerNumber, telephone, priority, description, status) 
                                    VALUES('$customerNumber','$telephone','$priority','$description','$status')";
                                    $statement = $conn->prepare($sqlInsertComplain);
                                    $results = $statement->execute();
                                    if($results){
                                        $_SESSION['customerNumber'] = $customerNumber;
                                        header("location: index.php");
                                    } else{
                                        $_SESSION['message'] = "Sorry!! Something went wrong!!";
                                        $_SESSION['alert'] = "alert alert-warning";
                                    }
                                } else {
                                    $_SESSION['message'] = "All Fields Are Required!";
                                    $_SESSION['alert'] = "alert alert-warning";
                                }
                            }
                        
                        
                        
                        ;?>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1054">
                        <form action="" method="POST" class="row g-3">
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer01">#Customer Number</label>
                            <input name="customerNumber" class="form-control is-valid"   id="validationServer01" valeu="<?php echo $custome;?>" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Telephone</label>
                            <input name="telephone" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Subject</label>
                            <input name="subject" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer04">Priority</label>
                            <select name="priority" class="form-select is-valid" id="validationServer04" aria-describedby="validationServer04Feedback" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option value="Low">Low</option>
                              <option value="Medium">Medium</option>
                              <option value="High">High</option>
                            </select>
                            <div class="invalid-feedback" id="validationServer04Feedback">Please select a valid state.</div>
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="validationServer03">Narrate Your Issue</label>
                            <textarea class="form-control is-valid" id="validationServer03" aria-describedby="validationServer03Feedback" class="invalid-feedback" id="validationSer" name="description" id="" cols="30" rows="10"></textarea>
                          </div>
                         
                          </div>
                          <div class="col-12">
                            <input name="submit" value="Submit" class="btn btn-primary" type="submit" role="button">
                          </div>
                        </form>
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