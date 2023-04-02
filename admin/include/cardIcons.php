 <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Total number of Tailors</div><?php
                    $query = "SELECT count(*) from tailors";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="tailors.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Total number of customers</div><?php
                    $query = "SELECT count(*) from customers";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="customers.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Top 10 preffered tailors</div><?php
                    $query = "SELECT count(*) from orders";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="toptailors.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Top queries</div><?php
                    $query = "SELECT count(*) from c_query";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="topqueries.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
