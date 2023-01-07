<?php
include('connect.php');
if (isset($_POST["create"])) {
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $townships = mysqli_real_escape_string($conn, $_POST["townships"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $phno= mysqli_real_escape_string($conn, $_POST["phno"]);
    $email= mysqli_real_escape_string($conn, $_POST["email"]);
    $sqlInsert = "INSERT INTO students(firstname , lastname , age , dob, address , townships, city , phno, email ) VALUES ('$firstname','$lastname','$age', '$dob', '$address','$townships', '$city', '$phno', '$email')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Student Added Successfully!";
        // header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $townships = mysqli_real_escape_string($conn, $_POST["townships"]);
    $city= mysqli_real_escape_string($conn, $_POST["city"]);
    $phno = mysqli_real_escape_string($conn, $_POST["phno"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE students SET firstname = '$firstname', lastname = '$lastname', age = '$age', dob = '$dob' , address = '$address' , townships = '$townships' , city = '$city' , phno = '$phno' , email = ' $email'  WHERE id='$id'"; 
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Student Updated Successfully!";
        // header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}

?>