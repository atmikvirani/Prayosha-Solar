<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">

        <div class="container-fluid">
           <!-- <span id="divToPrint" style="width: 100%;"> -->
 <h2>Newsletter</h2> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Useremail</th>
                      <th>Time</th>
                      <th>IP Address</th>
                      <!-- <th>Options</th> -->
                    </tr>
                  </thead>
                  
              <?php

$query = "select * from newsltr";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                             echo '<td>'. $row['srno'].'</td>';
                             echo '<td>'.$row['useremail'].'</td>';
                              echo '<td>'. $row['time'].'</td>';
                               echo '<td>'. $row['ip'].'</td>';
                               
                            // echo '<td><a type="button" class="btn btn-sm btn-warning fas fa-pencil-alt" href="#" data-toggle="modal" data-target="#AddRes'.$row['srno'].'">Modify Result</a>';
                        }
                               ?>
           
                </table>
             </div> 
              </div>
            </div>
         </div>
              
<?php
    include('include/scripts.php');
    include('include/footer.php');
?>