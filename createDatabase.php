<?php
    $host="localhost"; 
    $username="root";
    $password="";

    $con=new mysqli($host,$username,$password);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "connected";
    }

    $con->query("create database user");
?>