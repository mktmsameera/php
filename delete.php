<?php
    include 'connection.php';
    
    if(isset($_POST['submit'])){
        if($_POST['type']=="teacher"){
            $con->query("delete from teacher where id='".$_POST['id']."'");
            header('location:teacher.php');
        }else if($_POST['type']=="student"){
            $con->query("delete from student where id='".$_POST['id']."'");
            header('location:student.php');
        }
    }
?>