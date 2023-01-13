<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Students List</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">    
        <header class="d-flex justify-content-between my-4">
            <h1>Student List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Student</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Date of birth</th>
                <th>Address</th>
                <th>Townships</th>
                <th>City</th>
                <th>Ph no</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM student";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['firstname']; ?></td>
                <td><?php echo $data['lastname']; ?></td>
                <td><?php echo $data['age']; ?></td>
                <td><?php echo $data['dob']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td><?php echo $data['township']; ?></td>
                <td><?php echo $data['city']; ?></td>
                <td><?php echo $data['phno']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>