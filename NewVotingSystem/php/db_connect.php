<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "newvotingsystem";
    //Creating database connection
    $con = mysqli_connect($servername, $username, $password, $database);
    //check connection
    if(!$con){
        die("failed to connect".mysqli_connect_error());
    }
?>