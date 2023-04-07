<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Bill <!--<a type="button" href="addproject.php" class="btn btn-dark float-right">Add Project</a>--></h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>User ID</th>
                            <th>Useremail</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Street Add.</th>
                            <th>Landmark</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>Time</th>
                            <th>IP Address</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $query = "Select * from billing where stat = 1";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    echo '<td>'. $row['srno'].'</td>';
                                    echo '<td>'. $row['userid'].'</td>';
                                    echo '<td>'. $row['useremail'].'</td>';
                                    echo '<td>'. $row['fname'].'</td>';
                                    echo '<td>'. $row['lname'].'</td>';
                                    echo '<td>'. $row['cname'].'</td>';
                                    echo '<td>'. $row['email'].'</td>';
                                    echo '<td>'. $row['phone'].'</td>';
                                    echo '<td>'. $row['saddress'].'</td>';
                                    echo '<td>'. $row['landmark'].'</td>';
                                    echo '<td>'. $row['city'].'</td>';
                                    echo '<td>'. $row['state'].'</td>';
                                    echo '<td>'. $row['pincode'].'</td>';
                                    echo '<td>'. $row['time'].'</td>';
                                    echo '<td>'. $row['ip'].'</td>';
                                    echo '<td>'. $row['stat'].'</td>';
                                    // echo "<td><a type='button' class='btn btn-warning btn-sm' href='editproject.php?id=$row[proid]'>Edit</a> <a type='button' class='btn btn-danger btn-sm' href='delproject.php?id=$row[proid]'>Delete</a></td>";
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