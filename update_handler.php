<?php
if (isset($_SESSION['username'])){
    header("loaction:login.php");
}
?>
<?php

if (isset($_POST )){
    //start by connecting to the database by requiring the connection.php
    require 'connection.php';
    //now get the data has been updated
    $id = $_POST['w'];
    $name = $_POST['x'];
    $age = $_POST['y'];
    $phone = $_POST['z'];
    //start the update by creating the update query
    $UpdateQuery = "UPDATE `users_data` SET `jina`='$name',`umri`='$age',`simu`='$phone' WHERE id='$id'";
    //use mysqli_query funtion to execute the update
    $Update = mysqli_query($conn,$UpdateQuery);
    //check if the update was successful
    if (!$Update){
        echo "Record Update Failed";
    }else{
        //redirect the user back to view data to see if the data was updated
        header("location:view_data.php");
    }
}



