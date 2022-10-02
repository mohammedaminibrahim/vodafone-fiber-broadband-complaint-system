<?php require_once("./head.php");?>
  <body>
    <?php require_once("./side-bar.php");?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <?php require_once("./header.php");?>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <?php //require_once("./dashboard.php");?>
        <!-- dashboard ends here -->
          <!-- /.row-->
          <?php //require_once("./traffic.php");?>
          <!-- /.card.mb-4-->
       
            <!-- /.col-->
          </div>
          <!-- /.row-->

          <?php
                require_once("./config.php");
                $id = $_GET['id'];
                $sqlSelect = "SELECT customerNumber FROM complains WHERE id = '$id'";
                $statement = $conn->prepare($sqlSelect);
                $results = $statement->execute();
                $rows = $statement->fetchAll();


                foreach($rows as $row){
                    $customerNumber = $row['customerNumber'];
                }
          

                if(isset($_POST['reply'])){
                    $customerNumber = $customerNumber;
                    $repliedtext = $_POST['repliedtext'];

                    if(!empty($repliedtext)){
                        $sqlInsertReply = "INSERT INTO reply(customerNumber, repliedtext) 
                        VALUES('$customerNumber','$repliedtext')";
                        $statement = $conn->prepare($sqlInsertReply);
                        $results = $statement->execute();

                        if($results){
                            $_SESSION['message'] = "Reply sent successfully!!";
                            $_SESSION['alert'] = "alert alert-success";
                        } else {
                            $_SESSION['message'] = "!Oppss Something went wrong!!";
                            $_SESSION['alert'] = "alert alert-danger";
                        }
                    } else{
                        $_SESSION['message'] = "Reply Text can not be empty!";
                        $_SESSION['alert'] = "alert alert-danger";
                    }
                }
          
          ;?>
        
        <?php
            if(isset($_SESSION['message'])):?>
                <div class="<?= $_SESSION['alert'];?>">
                    <strong><?= $_SESSION['message'];?></strong>
                 </div>
        <?php endif;?>
                <form action="" method="post">
                    
                <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-739">
                        <div class="mb-3">
                          <label class="form-label"  disabled="" for="exampleFormControlInput1">Customer Number</label>
                          <input class="form-control" id="exampleFormControlInput1" value="<?= $customerNumber; ?>" type="text" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlTextarea1">Enter Reply here</label>
                          <textarea name="repliedtext" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <input type="submit" value="Reply" name="reply" class="btn btn-outline-secondary" type="button">
                      </div>
                    </div>
                </form>




                    <!-- /.col-->
                  </div>
                  <!-- /.row--><br>
       
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    <?php require_once("./footer.php");?>