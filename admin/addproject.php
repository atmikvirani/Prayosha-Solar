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
    <title>Add Project</title>
</head>
<body class="container-fluid">
<div>
        
        <h3 align="center">
            <a type="button" class="btn btn-info fa fa-arrow-circle-left" style="position:absolute;left:420px;top:5px;" href="users.php">Back</a>
            Add Project
        </h3>
        <hr>
    </div>
    <div class="container col-6">
    <form  action="addprojectdb.php" method="post" class="form-row col-12">
            <div class="form-group col-12">
                <label> Project Name</label>
                <input type="text" class="form-control" name="pname" value="">
            </div>
            <div class="form-group col-12">
                <label> Project Location</label>
                <input type="text" class="form-control" name="ploc" value="">
            </div>
            <div class="form-group col-12">
                <label> Image Path</label>
                <input type="text" class="form-control" name="imgpath" value="">
                <i style="color:grey">*You need to put your images in <u>project</u> folder...</i>
            </div>
            <div class="form-group col-12 ">
                <input type="submit" name="submit" class="btn btn-outline-success form-control" value="Add Product">
            </div>
        </form>
        </div>     
</body>
</html>