<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Registered User</h2> 
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Useremail</th>
                            <th>Password</th>
                            <th>Time</th>
                            <th>IP Address</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $query = "Select * from regdb where stat=1";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    // echo '<td><input name="srno" value="'. $row['userid'] .'"class="form-control border-0 shadow-none"></td>';
                                    // echo '<td><input name="srno" value="'. $row['username'] .'"class="form-control border-0 shadow-none"></td>';
                                    // echo '<td><input name="srno" value="'. $row['useremail'] .'"class="form-control border-0 shadow-none"></td>';
                                    // echo '<td><input name="srno" value="'. $row['password'] .'"class="form-control border-0 shadow-none"></td>';
                                    // echo '<td><input name="srno" value="'. $row['time'] .'"class="form-control border-0 shadow-none"></td>';
                                    // echo '<td><input name="srno" value="'. $row['ip'] .'"class="form-control border-0 shadow-none"></td>';
                                    // echo '<td><input name="srno" value="'. $row['stat'] .'"class="form-control border-0 shadow-none"></td>';

                                    echo '<td>'. $row['userid'].'</td>';
                                    echo '<td>'. $row['username'].'</td>';
                                    echo '<td>'. $row['useremail'].'</td>';
                                    echo '<td>'. $row['password'].'</td>';
                                    echo '<td>'. $row['time'].'</td>';
                                    echo '<td>'. $row['ip'].'</td>';
                                    echo '<td>'. $row['stat'].'</td>';
                                    echo "<td><a type='button' class='btn btn-warning' href='editusers.php?id=$row[userid]'>Edit </a> <a type='button' class='btn btn-danger' href='deluserdb.php?userid=$row[userid]'>Disable</a> </td>";
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