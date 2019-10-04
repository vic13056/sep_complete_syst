<?php
if (isset($_SESSION['Username'])){
    header("loaction:login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="save_data.php" class="btn btn-primary">Add Data</a>
    <table class="table table-hover table-dark">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
        <?php
        //to collect data/select data from the db first connect to the db
        //require your connect.php file to achieve this
        require "connection.php";
        //select the data using the select query
        $SelectQuery = "SELECT * FROM users_data";
        //to implement the selection use mysqli_query function
        $Select = mysqli_query($conn,$SelectQuery);
        //use the while looop to loop through your data on $select as you display
        $jina = "";
        $umri = "";
        $simu = "";
        $id = "";
        while ($x = mysqli_fetch_assoc($Select)){
            //ectract your looped data that is now on $x
            extract($x);
            echo "<tr>
                   <td>$jina</td>
                    <td>$umri</td>
                    <td>$simu</td>  
                    <td><a href='delete_handler.php?x=$id' class='btn btn-danger'>Delete</a></td> 
                    <td><a href='update.php?a=$id&b=$jina&c=$umri&d=$simu' class='btn btn-primary'>Update</a></td>             
                  </tr>";
        }
        ?>
    </table>
</body>
</html>











