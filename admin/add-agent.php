

                    <?php 
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
            if(isset($_POST['submit'])){
              //$customerNumber = $_POST['customerNumber'];
                $fullname = trim($_POST['fullname']);
                $dob = trim($_POST['dob']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $confirmpassword = trim($_POST['confirmpassword']);
                $telelphone = trim($_POST['telelphone']);
                $ghanacard = trim($_POST['ghanacard']);
                $landmark = trim($_POST['landmark']);
                $phone = trim($_POST['phone']);

                //check if all fields are not empty
                if(!empty($fullname) && !empty($dob) && !empty($email) && !empty($password) && !empty($confirmpassword)
                 && !empty($telelphone) && !empty($ghanacard) && !empty($landmark)
                && !empty($phone)){
                    //check if passwords are the same
                    if($password == $confirmpassword){
                        //hash password
                        $password = password_hash($password, PASSWORD_BCRYPT);
                        $agentnumber = uniqid();

                        //squery to insert into databese
                        $sqlInsert = "INSERT INTO agents(agentid, fullname, email, password, dob, contactnumber, closelandmark, tellphone, ghanacard)
                         VALUES('$agentnumber','$fullname','$email','$password','$dob','$telelphone','$landmark','$phone','$ghanacard')";
                        $statement = $conn->prepare($sqlInsert);
                        $results = $statement->execute();
  

                        if($results){
                            $_SESSION['message'] = "Added Successfully";
                            $_SESSION['alert'] = "alert alert-success";
                            header("location: view-agents.php");
                            ob_end_flush();

                        } else
                        $_SESSION['message'] = "Sorry!! Something went wrong... Try again";
                        $_SESSION['alert'] = "alert alert-warning";

                    }else {
                        $_SESSION['message'] = "Sorry!! Password Missmatch";
                        $_SESSION['alert'] = "alert alert-danger";
                    }
                } else{
                    $_SESSION['message'] = "All Fields are required!!";
                    $_SESSION['alert'] = "alert alert-danger";
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
                        <form action="" method="POST" class="row g-3">
                          <div class="col-md-3">
                            <label class="form-label disabled" for="validationServer01">#Agent Number</label>
                            <input name="agentnumber" class="disabled form-control is-valid" disabled aria-disabled="true" placeholder="Auto Generate" id="validationServer01" type="text" required="">
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="validationServer02">Fullname</label>
                            <input name="fullname" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Date of birth</label>
                            <input name="dob" class="form-control is-valid" id="validationServer02" type="date" required="">
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="validationServer01">Email</label>
                            <input name="email" class="form-control is-valid"   id="validationServer01" type="email" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Password</label>
                            <input name="password" class="form-control is-valid" id="validationServer02" type="password" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Confirm Password</label>
                            <input name="confirmpassword" class="form-control is-valid" id="validationServer02" type="password" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Telephone Number</label>
                            <input name="telelphone" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Ghana Card Number</label>
                            <input name="ghanacard" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>

                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Nearest Landmark</label>
                            <input name="landmark" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Phone</label>
                            <input name="phone" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                         
                          </div>
                          <div class="col-12">
                            <input name="submit" value="Submit" class="btn btn-primary" type="submit" role="button">
                          </div>
                        </form>
                      </div>
                    </div>




                    <!-- /.col-->
                  </div>
                  <!-- /.row--><br>
           
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    <?php require_once("./footer.php");?>