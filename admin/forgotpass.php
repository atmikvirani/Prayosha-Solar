<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Forgot Password <!--<a type="button" href="addproject.php" class="btn btn-dark float-right">Add Project</a>--></h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Useremail</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "Select * from otp";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    echo '<td>'. $row['id'].'</td>';
                                    echo '<td>'. $row['uid'].'</td>';
                                    echo '<td>'. $row['useremail'].'</td>';
                                    echo '<td>'. $row['code'].'</td>';
                                    echo '<td>'. $row['stat'].'</td>';
                                    echo '<td>'. $row['time'].'</td>';
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