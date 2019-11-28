<?php
    $host="localhost"; 
    $username="root";
    $password="";
    $database="user";

    $con=new mysqli($host,$username,$password,$database);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        //echo "connected";
    }
?>