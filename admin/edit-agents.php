

                    <?php 
                    session_start();
                    ob_start();
                    require_once("./head.php");?>
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
                            <?php
                                require_once("./config.php");
                                $id = $_GET['id'];
                              if(isset($_POST['submit'])){
                                //$customerNumber = $_POST['customerNumber'];
                                  $fullname = trim($_POST['fullname']);
                                  $dob = trim($_POST['dob']);
                                  $email = trim($_POST['email']);
                                  $telelphone = trim($_POST['telelphone']);
                                  $ghanacard = trim($_POST['ghanacard']);
                                  $landmark = trim($_POST['landmark']);
                                  $phone = trim($_POST['phone']);

                                
                                  
                                  if(!empty($fullname) && !empty($dob) && !empty($email) && !empty($telelphone) && !empty($ghanacard) && !empty($landmark) && !empty($phone)) {
                                    //query update/Edit agent infor
                                    $sqlUpdete = "UPDATE agents SET fullname = '$fullname', email = '$email', contactnumber = '$telelphone', 
                                    ghanacard = '$ghanacard', closelandmark = '$landmark', tellphone = '$phone'";
                                    $statement = $conn->prepare($sqlUpdete);
                                    $results = $statement->execute();

                                    if($results){
                                      $_SESSION['message'] = "Agent Details Updated Successfully!!";
                                      $_SESSION['alert'] = "alert alert-primary";
                                      header("location: view-agents.php");
                                      ob_end_flush();
                                    } else{
                                      $_SESSION['message'] = "Sorry!! Something went wrong, try again!!";
                                      $_SESSION['alert'] = "alert alert-warning";
                                    }
                                 } else {
                                  $_SESSION['message'] = "All Fields are required!!";
                                  $_SESSION['alert'] = "alert alert-warning";
                                 }
                              
                               
                  
                              }
                            
                            
                            ;?>
                            <!-- /.row-->
                            <div class="tab-content rounded-bottom">
                                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1054">
                                        <?php
                              if(isset($_SESSION['message'])):?>
                                  <div class="<?= $_SESSION['alert'];?>">
                                      <strong><?= $_SESSION['message'];?></strong>
                                   </div>
                          <?php endif;?>
                          
                                        <?php  
                                          require_once("./config.php");
                                          $id = $_GET['id'];
                                        

                                        $sqlEdit = "SELECT * FROM agents WHERE id = '$id'";
                                        $statement = $conn->prepare($sqlEdit);
                                        $results = $statement->execute();
                                        $rows = $statement->fetchAll();

                                        foreach($rows as $i):?>
                                    
                                   
                                  

                                          <form action="" method="POST" class="row g-3">
                                            <div class="col-md-3">
                                              <label class="form-label disabled" for="validationServer01">#Agent Number</label>
                                              <input name="agentnumber" value="<?= $i['agentid'];?>" class="disabled form-control is-valid" disabled aria-disabled="true" placeholder="Auto Generate" id="validationServer01" type="text" required="">
                                            </div>
                                            <div class="col-md-4">
                                              <label class="form-label" for="validationServer02">Fullname</label>
                                              <input name="fullname" value="<?= $i['fullname'];?>" class="form-control is-valid" id="validationServer02" type="text" required="">
                                            </div>
                                            <div class="col-md-3">
                                              <label class="form-label" for="validationServer02">Date of birth</label>
                                              <input name="dob" value="<?= $i['dob'];?>" class="form-control is-valid" id="validationServer02" type="date" required="">
                                            </div>
                                            <div class="col-md-4">
                                              <label class="form-label" for="validationServer01">Email</label>
                                              <input name="email" value="<?= $i['email'];?>" class="form-control is-valid"   id="validationServer01" type="email" required="">
                                            </div>
                                            <div class="col-md-3">
                                              <label class="form-label" for="validationServer02">Telephone Number</label>
                                              <input name="telelphone" value="<?= $i['tellphone'];?>" class="form-control is-valid" id="validationServer02" type="text" required="">
                                            </div>
                                            <div class="col-md-3">
                                              <label class="form-label" for="validationServer02">Ghana Card Number</label>
                                              <input name="ghanacard" value="<?= $i['ghanacard'];?>" class="form-control is-valid" id="validationServer02" type="text" required="">
                                            </div>
                                           
                                            <div class="col-md-3">
                                              <label class="form-label" for="validationServer02">Nearest Landmark</label>
                                              <input name="landmark" value="<?= $i['closelandmark'];?>" class="form-control is-valid" id="validationServer02" type="text" required="">
                                            </div>
                                            <div class="col-md-3">
                                              <label class="form-label" for="validationServer02">Phone</label>
                                              <input name="phone" value="<?= $i['contactnumber'];?>" class="form-control is-valid" id="validationServer02" type="text" required="">
                                            </div>
                                           
                                            </div>
                                            <div class="col-12">
                                              <input name="submit" value="Submit" class="btn btn-primary" type="submit" role="button">
                                            </div>
                                          </form>
                                        </div>
                                      </div>

                                        
                                        <?php endforeach;?>
                  
                  
                  
                                      <!-- /.col-->
                                    </div>
                                    <!-- /.row--><br>
                             
                              <!-- /.col-->
                            </div>
                            <!-- /.row-->
                          </div>
                        </div>
                      <?php require_once("./footer.php");?>