<?php

if (isset($_GET["x"])){
    $id = $_GET["x"];
    echo $id;

    //to implement the delete connect to the database first
    //reqiure your connection php to achieve this
    require "connection.php";
    //start by creating the delete query
    $DeleteQuery = "DELETE FROM `users_data` WHERE id ='$id'";
    //to achieve the deletion use the mysqli_query funtion
    $Delete = mysqli_query($conn,$DeleteQuery);
    //check if the deletion was successful
    if (!$Delete){
        echo "Deleting Failed";
    }else{
        //redirect the user back to view data.php to see if the record was deleted
        header("location:view_data.php");
    }
}
