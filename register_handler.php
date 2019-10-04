<?php

if (isset($_POST['btn_reg'])) {
    //to register a user,connect to the db
    //require connection.php to achieve this
    require 'connection.php';
    //start receiving from the user
    $Username = $_POST['uname'];
    $Password = $_POST['pswd'];
    //start implementing the registration process
    //check if the person is alredy in the db using the select query
    $SelectQuery = "SELECT * FROM `users` WHERE arafa='$Username'";
    $Select = mysqli_query($conn, $SelectQuery);
    //count the db rows that have records thatt match what we have selected
    $NumOfRows = mysqli_num_rows($Select);
    //check if the row number is 1 then the person exists
    if ($NumOfRows == 1) {
        echo "Username already exists,please login to continue";
        die();
    } else {
        //proceed to register using an insert query
        $InsertQuery = "INSERT INTO `users`(`id`, `arafa`, `siri`) 
                                        VALUES (null,'$Username','$Password')";
        $Register = mysqli_query($conn, $InsertQuery);
        //check if the registration was successful
        if (!$Register) {
            echo "Registration Failed";
        } else {
            header("location:login.php");
        }
    }
}