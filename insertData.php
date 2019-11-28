<?php
    include 'connection.php';

    //insert data into the stutent table
    $con->query("insert into student (name,password) values('Amal',md5('Amalpwd')),('Kamal',md5('Kamalpwd')),('Nimal',md5('Nimalpwd'))");

    //insert data into the teacher table
    $con->query("insert into teacher (name,password) values('Saman',md5('Samanpwd')),('Anura',md5('Anurapwd')),('Wishva',md5('Wishvapwd'))");
 

?>