 <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Total No. of Users</div><?php
                    $query = "SELECT count(*) from regdb";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="users.php">
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
                    <i class="fa fa-fw fa-dollar-sign"></i>
                  </div>
                  <div class="mr-5">Total No. of Orders</div><?php
                    $query = "SELECT count(*) from cart";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="order.php">
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
                    <i class="fa fa-fw fa-cart-shopping"></i>
                  </div>
                  <div class="mr-5">Total No. of Products</div><?php
                    $query = "SELECT count(*) from product";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="product.php">
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
                    <i class="fa fa-fw fa-line-chart"></i>
                  </div>
                  <div class="mr-5">Total No. of Projects</div><?php
                    $query = "SELECT count(*) from project";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result); 
                   echo "(".$row[0].")"; 
                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="project.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
