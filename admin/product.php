<?php
    include('include/connect.php');
    include('include/header.php');
    include('include/sidebar1.php')
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <h2>Products <a type="button" href="addproduct.php" class="btn btn-dark float-right">Add Product</a></h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                            <th>Image Path</th>
                            <th>Ratings</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $query = "Select * from product where stat=1";
                            $result = mysqli_query($db, $query) or die (mysqli_error($db));
                            while ($row = mysqli_fetch_assoc($result))
                            {                     
                                echo '<tr>';
                                    echo '<td>'. $row['srno'].'</td>';
                                    echo '<td>'. $row['pid'].'</td>';
                                    echo '<td>'. $row['pname'].'</td>';
                                    echo '<td>'. $row['pprice'].'</td>';
                                    echo '<td>'. $row['pdesc'].'</td>';
                                    echo '<td>'. $row['imgpath'].'</td>';
                                    echo '<td>'. $row['rating'].'</td>';
                                    echo '<td>'. $row['time'].'</td>';
                                    echo '<td>'. $row['stat'].'</td>';
                                    echo "<td><a type='button' class='btn btn-warning btn-sm btn-block' href='editproduct.php?id=$row[srno]'>Edit</a> <a type='button' class='btn btn-danger btn-sm btn-block' href='deleteproduct.php?id=$row[srno]'>Delete</a></td>";
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