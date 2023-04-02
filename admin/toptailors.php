<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Top 10 Preffered Tailors</h2> 
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tailor ID</th>
                            <th>Tailor</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Shop Name</th>
                            <th>Address</th>
                            <th>Number of Orders</th>
                            <th>Number of Reviews</th>
                            <th>Ratings</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $query = "SELECT s.stud_id,concat(s.fname,' ',s.lname) as 'name',s.examinee_code,s.gender,s.b_date,s.email,s.username,s.dateoftest,s.raw_score,s.stanine,sum.qualifying_result FROM student s left join summary sum on sum.stud_id = s.stud_id";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                                    
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    echo '<td>'. $row['name'].'</td>';
                                    echo '<td>'. $row['examinee_code'].'</td>';
                                    echo '<td>'. $row['gender'].'</td>';
                                    echo '<td>'. $row['b_date'].'</td>';
                                    echo '<td>'. $row['email'].'</td>';
                                    echo '<td>'. $row['username'].'</td>';
                                    echo '<td>'. $row['dateoftest'].'</td>';
                                    echo '<td>'. $row['raw_score'].'</td>';
                                    echo '<td>'. $row['stanine'].'</td>';
                                    echo " ";
                                    echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-pencil-alt" href="#" data-toggle="modal" data-target="#AddRes'.$row['stud_id'].'">Add Result</a>';
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