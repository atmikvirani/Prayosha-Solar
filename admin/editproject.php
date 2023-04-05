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
    <title>Edit Project</title>
</head>
<body class="container-fluid">
<?php
        $id = $_GET['id'];
        $connect = mysqli_connect("localhost", "root", "", "project");
        $query = "select * from project where proid=$id";
        $records = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($records);
    ?>
    <div>
        
        <h3 align="center">
            <a type="button" class="btn btn-info fa fa-arrow-circle-left" style="position:absolute;left:420px;top:5px;" href="users.php">Back</a>
            Edit Project
        </h3>
        <hr>
    </div>
    <div class="container col-6">
    <form  action="editprojectdb.php" method="post" class="form-row col-12">
            <div class="form-group col-12">
                <label> Product ID</label>
                <input type="text" class="form-control" name="pid" value="<?php echo $row['proid'] ?>" disabled>
                <input type="hidden" class="form-control" name="pid" value="<?php echo $row['proid'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Product Name</label>
                <input type="text" class="form-control" name="protitle" value="<?php echo $row['protitle'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Product Price</label>
                <input type="text" class="form-control" name="proloc" value="<?php echo $row['proloc'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Image Path</label>
                <input type="text" class="form-control" name="imgpath" value="<?php echo $row['imgpath'] ?>" >
                <i style="color:grey">*You need to put your images in <u>project</u> folder...</i>

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