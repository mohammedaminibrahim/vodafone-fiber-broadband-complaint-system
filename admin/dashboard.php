<?php
require_once("./config.php");
//total customers
$sql = "SELECT * FROM customers";
$statement = $conn->prepare($sql);
$statement->execute();
$results = $statement->rowCount();


//total agents
$sqlTotalAgents = "SELECT * FROM agents";
$statement = $conn->prepare($sql);
$statement->execute();
$totalAgents = $statement->rowCount();

//total complains
$sql = "SELECT * FROM complains";
$statement = $conn->prepare($sql);
$statement->execute();
$totalComplains = $statement->rowCount();

//total replies
$sql = "SELECT * FROM reply";
$statement = $conn->prepare($sql);
$statement->execute();
$totalReplies = $statement->rowCount();






;?>

<div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $results;?> <span class="fs-6 fw-normal">(-12.4%
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                        </svg>)</span></div>
                    <div>Customers</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $totalAgents;?> <span class="fs-6 fw-normal">(40.9%
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                        </svg>)</span></div>
                    <div>Agents</div>
                  </div>
                 
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart2" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $totalComplains;?> <span class="fs-6 fw-normal">(84.7%
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                        </svg>)</span></div>
                    <div>Issues</div>
                  </div>
                 
                </div>
                <div class="c-chart-wrapper mt-3" style="height:70px;">
                  <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-danger">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $totalReplies;?> <span class="fs-6 fw-normal">(-23.6%
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                        </svg>)</span></div>
                    <div>Resolved Issues</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>