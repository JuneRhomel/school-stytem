<?php
function connection()
{
    // echo "hello word";

    $host = "localhost";
    $username = "root";
    $password = "Gray27june";
    $database = "student_system";
    
    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
}
