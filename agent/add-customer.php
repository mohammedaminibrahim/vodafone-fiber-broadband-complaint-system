

                    <?php 
                    session_start();
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
              $addedby = $_SESSION['email'];
            if(isset($_POST['submit'])){
              //$customerNumber = $_POST['customerNumber'];
              $fullname = $_POST['fullname'];
              $dob = $_POST['dob'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $ghanaCard = $_POST['ghanaCard'];
              $location = $_POST['location'];
              $landmark = $_POST['landmark'];
              $phone = $_POST['phone'];

              $customerNumber = uniqid();
              $password = password_hash($password, PASSWORD_BCRYPT);

              $sqlInsertCustomer = "INSERT INTO customers(customerNumber, fullname, dob, email, password, ghanaCard,
              location, landmark, addedby, phone) VALUES('$customerNumber','$fullname','$dob','$email','$password','$ghanaCard',
              '$location','$landmark', '$addedby','$phone')";
              $statement = $conn->prepare($sqlInsertCustomer);
              $results = $statement->execute();
              $rows = $statement->fetchAll();

              if($results){
                $_SESSION['message'] = "Customer Added Successfully";
                $_SESSION['alert'] = "alert alert-success";
              } else {
                $_SESSION['message'] = "Sorry Something went wrong!";
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
                            <label class="form-label disabled" for="validationServer01">#Customer Number</label>
                            <input name="customerNumber" class="disabled form-control is-valid" disabled aria-disabled="true" placeholder="Auto Generate" id="validationServer01" type="text" required="">
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
                            <label class="form-label" for="validationServer02">Ghana Card Number</label>
                            <input name="ghanaCard" class="form-control is-valid" id="validationServer02" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer02">Location</label>
                            <input name="location" class="form-control is-valid" id="validationServer02" type="text" required="">
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