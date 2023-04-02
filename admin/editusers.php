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
    <title>Edit User</title>
</head>
<body class="container-fluid">
    <?php
        $id = $_GET['id'];
        $connect = mysqli_connect("localhost", "root", "", "project");
        $query = "select * from regdb where userid=$id";
        $records = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($records);
    ?>
    <div>
        
        <h3 align="center">
            <a type="button" class="btn btn-info fa fa-arrow-circle-left" style="position:absolute;left:420px;top:5px;" href="users.php"><span class="fa fa-arrow-circle-o-left">Back</span></a>
            Edit User
        </h3>
        <hr>
    </div>
    <div class="container col-6">
        <!-- <div><a type="button" class="btn btn-info" href="users.php">Back</a></div> -->
        <form  action="edituserdb.php" method="post" class="form-row col-12">
            <div class="form-group col-12">
                <label> User ID</label>
                <input type="text" class="form-control" name="" value="<?php echo $row['userid'] ?>" disabled>
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['userid'] ?>">

            </div>
            <div class="form-group col-12">
                <label> Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Useremail</label>
                <input type="text" class="form-control" name="useremail" value="<?php echo $row['useremail'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Password</label>
                <input type="text" class="form-control" name="" value="<?php echo $row['password'] ?>" disabled>
                <input type="hidden" class="form-control" name="password" value="<?php echo $row['password'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Time</label>
                <input type="text" class="form-control" name="" value="<?php echo $row['time'] ?>" disabled>
                <input type="hidden" class="form-control" name="time" value="<?php echo $row['time'] ?>">
            </div>
            <div class="form-group col-12">
                <label> IP Address</label>
                <input type="text" class="form-control" name="" value="<?php echo $row['ip'] ?>" disabled>
                <input type="hidden" class="form-control" name="ip" value="<?php echo $row['ip'] ?>">
            </div>
            <div class="form-group col-12">
                <label> Status</label>
                <input type="text" class="form-control" name="stat" value="<?php echo $row['stat'] ?>">
            </div>
            <div class="form-group col-12 ">
                <input type="submit" name="submit" class="btn btn-outline-success form-control" value="Update User Details">
            </div>
        </form>
        </div>     
</body>
</html>