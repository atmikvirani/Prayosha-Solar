<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Project</h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Project Title</th>
                            <th>Product Location</th>
                            <th>Image Path</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $query = "Select * from project where stat = 0";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    echo '<td>'. $row['proid'].'</td>';
                                    echo '<td>'. $row['protitle'].'</td>';
                                    echo '<td>'. $row['proloc'].'</td>';
                                    echo '<td>'. $row['imgpath'].'</td>';
                                    echo '<td>'. $row['time'].'</td>';
                                    echo '<td>'. $row['stat'].'</td>';
                                    echo "<td><a type='button' class='btn btn-warning btn-sm btn-block' href='editproject.php?id=$row[proid]'>Edit</a></td>";
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