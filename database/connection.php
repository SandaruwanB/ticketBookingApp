<?php

    $server = "localhost";
    $user = "root";
    $password = "Sanda@12";
    $database = "cinema";

    $con = mysqli_connect($server, $user, $password, $database);

    if(!$con){
        die.mysqli_error($con);
    }