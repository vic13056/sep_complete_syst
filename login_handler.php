<?php

//to login we will need to asign a session to the user
//we will also require to connect to the db

    //check if the login button was clicked
if (isset($_POST['btn_log'])){
    require 'connection.php';
    session_start();
    //receive data from the user
    $Username = $_POST['uname'];
    $Password = $_POST['pswd'];
    //use the select query to check if the details are submitted
    //exist on your db
    $SelectQuery = "SELECT * FROM users WHERE arafa='$Username'&& siri='$Password'";
    $Result = mysqli_query($conn,$SelectQuery);
    $NumRows = mysqli_num_rows($Result);
    //check if the count function found any record
    if ($NumRows==1){
        //assign a session
        $_SESSION['Username'] = $Username;
        //redirect the user to home page.in our case save data.php
        header("location:save_data.php");
    }else{
        //the login will have failed so return the user on the login page
        header("location:login.php");
    }
}


