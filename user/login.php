<?php 
session_start();
require_once("./head.php");?>


<?php

    

    require_once("./config.php");

    if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);


        if(!empty($email) && !empty($password)){
            //query to select user email
            $sqlSelectUsers = "SELECT * FROM users WHERE email = '$email'";
            $statement = $conn->prepare($sqlSelectUsers);
            $results = $statement->execute();
            $rows = $statement->fetchAll();
            $Newrow = $statement->rowCount();

            if($Newrow > 0){
                foreach($rows as $row){
                    if(password_verify($password, $row['password'])){
                        $_SESSION['email'] = $email;
                       // $_SESSION['customernumber'] = $row[''];
                        header("location: index.php");
                    } else {
                        $_SESSION['message'] = "Wrong Password!!";
                        $_SESSION['alert'] = "alert alert-danger";
                    }
                }
            } else {
                $_SESSION['message'] = "Sorry!! Deteils Are not found here!!";
                $_SESSION['alert'] = "alert alert-warning";
            }

        } else {
            $_SESSION['message'] = "Sorry!! All Fields are empty!!";
            $_SESSION['alert'] = "alert alert-warning";
        }
    }


;?>


  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
      <?php
            if(isset($_SESSION['message'])):?>
                <div class="<?= $_SESSION['alert'];?>">
                    <strong><?= $_SESSION['message'];?></strong>
                 </div>
        <?php endif;?>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>

                  <p class="text-medium-emphasis">Customer Login - Portal</p>
                    <form action="login.php" method="POST">
                        <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span>
                        <input name="email" class="form-control" type="text" placeholder="Username">
                        </div>
                         <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                        <input name="password" class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-6">
                        <input type="submit" value="Login" name="login" class="btn btn-danger px-4" type="button">
                        </div>
                    </form>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-danger py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <img src="./assets/vodafone.png" style="height: 50%; width: 50%;" alt="" srcset="">
                    <p>
                      Vodafone Fiber Broadband Management System. </br>
                      The Future Is Exciting.
                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
    </script>

  </body>
</html>