<?php
session_start();
//to save data into the db start by connecting to the database
//to do this create the connection on a separate file and require it from this file

    require "connection.php";
    //check if the save button has been clicked

    if (isset($_POST["btn_save"])){
        //start receiving data from the user
        $Name = $_POST["x"];
        $Age = $_POST["y"];
        $Phone = $_POST["z"];

        //save the data to the db using the insert querry
        $InsertQuery = "INSERT INTO `users_data`(`id`, `jina`, `umri`, `simu`) VALUES (null,'$Name','$Age','$Phone')";
        //use mysqli_query function to execute the insert query
        $Save = mysqli_query($conn,$InsertQuery);
        //check if the saving was successful
        if (!$Save){
            echo "Saving Failed";
        }else{
            //echo "Data Saved Successful";
            //go back to save data file
            header("location:save_data.php");
        }
    }


