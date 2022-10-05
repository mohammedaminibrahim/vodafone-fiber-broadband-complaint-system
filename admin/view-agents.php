<?php 
session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
  header("location: login.php");
  exit();
}


require_once("./head.php");?>
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

                    

                    <div class="tab-content rounded-bottom">
                    <?php
            if(isset($_SESSION['message'])):?>
                <div class="<?= $_SESSION['alert'];?>">
                    <strong><?= $_SESSION['message'];?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                 <?php endif;?>
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-681">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Agent Number</th>
                          <th scope="col">Full Name</th>
                          <th scope="col">Ghana Card</th>
                          <th scope="col">Telephone</th>
                          <th scope="col">Closes Landmark</th>
                          <th scope="col">Action</th>
                          <th scope="col">Joined At</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            require_once("./config.php");
                            $sqlSelectAgents = "SELECT * FROM agents";
                            $statement = $conn->prepare($sqlSelectAgents);
                            $results = $statement->execute();
                            $rows = $statement->fetchAll();

                            foreach($rows as $row){
                                $id = $row['id'];
                                $agentnumber = $row['agentid'];
                                $fullname = $row['fullname'];
                                $ghanacard = $row['ghanacard'];
                                $telephone = $row['tellphone'];
                                $closelandmark = $row['closelandmark'];
                                $joindate = $row['regDate'];


                                echo "
                                <tr>
                                    <td>{$id}</td>
                                    <td>{$agentnumber}</td>
                                    <td>{$fullname}</td>
                                    <td>{$ghanacard}</td>
                                    <td>{$telephone}</td>
                                    <td>{$closelandmark}</td>
                                    <td>
                                    <a href='delete-agent.php?id={$id}' class='btn btn-danger rounded-pill' type='button' role='button'>Delete</a>
                                    <a href='edit-agents.php?id={$id}' class='btn btn-success rounded-pill' type='button' role='button'>Edit</a>
                                    </td>
                                    <td>{$joindate}</td>
                                </tr>";

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