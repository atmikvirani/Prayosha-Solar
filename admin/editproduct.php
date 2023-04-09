<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <!-- <script src="/bootstrap/dist/js/jquery.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script> -->
        <link href="bootstrap-4.6.1/dist/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-4.6.1/dist/js/jquery.js"></script>
        <script src="bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="fontawesome-free/css/all.css">
    <title>Edit Product</title>
</head>
<body class="container-fluid">
<?php
        $id = $_GET['id'];
        $connect = mysqli_connect("localhost", "root", "", "project");
        $query = "select * from product where srno=$id";
        $records = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($records);
    ?>
    <div>
        
        <h3 align="center">
            <a type="button" class="btn btn-info fa fa-arrow-circle-left" style="position:absolute;left:420px;top:5px;" href="users.php">Back</a>
            Edit Product
        </h3>
        <hr>
    </div>
    <div class="container col-6">
    <form  action="editproductdb.php" method="post" class="form-row col-12">
            <div class="form-group col-12">
                <label> Product ID</label>
                <input type="text" class="form-control" name="pid" value="<?php echo $row['pid'] ?>" >
            </div>
            <div class="form-group col-12">
                <label> Product Name</label>
                <input type="text" class="form-control" name="pname" value="<?php echo $row['pname'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Product Price</label>
                <input type="text" class="form-control" name="pprice" value="<?php echo $row['pprice'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Product Description</label>
                <input type="text" class="form-control" name="pdesc" value="<?php echo $row['pdesc'] ?>" >
            </div>
            <div class="form-group col-12">
                <label> Image Path</label>
                <input type="text" class="form-control" name="imgpath" value="<?php echo $row['imgpath'] ?>" >
                <i style="color:grey">*You need to put your images in <u>cart</u> folder...</i>
            </div>
            <div class="form-group col-12">
                <label> Ratings</label>
                <input type="text" class="form-control" name="rating" value="<?php echo $row['rating'] ?>" >
            </div>
            <div class="form-group col-12">
                <label> Time</label>
                <input type="text" class="form-control" name="" value="<?php echo $row['time'] ?>" disabled>
                <input type="hidden" class="form-control" name="time" value="<?php echo $row['time'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Status</label>
                <input type="text" class="form-control" name="stat" value="<?php echo $row['stat'] ?>">
            </div>
            <div class="form-group col-12 ">
                <input type="submit" name="submit" class="btn btn-outline-success form-control" value="Update Product Details">
            </div>
        </form>
        </div>     
</body>
</html>