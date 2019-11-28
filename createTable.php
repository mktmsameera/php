<?php
    include 'connection.php';

    //create student tabale with column id,name,password
    $con->query("create table student(id int AUTO_INCREMENT primary key,name varchar(50),password varchar(100))");

    //create teacher tabale with column id,name,password
    $con->query("create table teacher(id int AUTO_INCREMENT primary key,name varchar(50),password varchar(100))");
    

?>