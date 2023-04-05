<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Orders</h2> 
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>User ID</th>
                            <th>Useremail</th>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Price Total</th>
                            <th>Time</th>
                            <th>IP Address</th>
                            <!-- <th>Options</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $query = "select * from cart";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                                    
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    echo '<td>'. $row['srno'].'</td>';
                                    echo '<td>'. $row['userid'].'</td>';
                                    echo '<td>'. $row['useremail'].'</td>';
                                    echo '<td>'. $row['pid'].'</td>';
                                    echo '<td>'. $row['pname'].'</td>';
                                    echo '<td>'. $row['pdesc'].'</td>';
                                    echo '<td>'. $row['pprice'].'</td>';
                                    echo '<td>'. $row['pquant'].'</td>';
                                    echo '<td>'. $row['ppricetot'].'</td>';
                                    echo '<td>'. $row['time'].'</td>';
                                    echo '<td>'. $row['ip'].'</td>';
                                    // echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-pencil-alt" href="#" data-toggle="modal" data-target="#AddRes'.$row['srno'].'">Add Result</a>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
              
<?php
    include('include/scripts.php');
    include('include/footer.php');
?>