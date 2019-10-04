<?php

$Host = "localhost";
$Username ="root";
$Password = "";
$Database = "sep_complete_syst";

$conn = mysqli_connect($Host,$Username,$Password,$Database);
//check if the connection was succsesful
if (!$conn){
    echo "Connection Failed";
}


