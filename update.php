<?php
session_start();
if (isset($_SESSION['username'])){
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
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<?php

if (isset($_GET["a"])){
    $id = $_GET["a"];
    $name = $_GET["b"];
    $age = $_GET["c"];
    $phone = $_GET["d"];

}
?>
   <div class="input_div">
       <form action="update_handler.php" method="post">
           <input type="text" name="w" value="<?php echo $id; ?>" hidden><br><br>
           <input type="text" name="x" value="<?php echo $name; ?>" required><br><br>
           <input type="text" name="y" value="<?php echo $age; ?>" required><br><br>
           <input type="text" name="z" value="<?php echo $phone; ?>" required><br><br>
           <input type="submit" name="btn" value="Update" class="btn btn-outline-success btn-block"><br>
           <a href="View_data.php" class="btn btn-outline-primary btn-block">Back</a>
       </form>
   </div>
</body>
</html>


