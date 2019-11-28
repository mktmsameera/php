<?php 
    session_start();
    include 'connection.php';
    if(isset($_POST['submit'])){
        
        $result=$con->query("select * from teacher where name='".$_POST['name']."'");
        while($row=$result->fetch_assoc()){
            
            if($row['password']==md5($_POST['pwd'])){
                $_SESSION['user_type']="teacher";
                $_SESSION['username']=$row['name'];
                header('location:teacher.php');

            }
        }
        
        $result=$con->query("select * from student where name='".$_POST['name']."'");
        while($row=$result->fetch_assoc()){
            if($row['password']==md5($_POST['pwd'])){
                $_SESSION['user_type']="student";
                $_SESSION['username']=$row['name'];
                header('location:student.php');
            }
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .divid{
            width:500px;
            margin:auto;
            text-align:center;
            
        }
        
    </style>
</head>
<body>
<center>
    <div id="divid">
        <h1>Login Form</h1>
        <form action="login.php" method="post">
            Username
            <br>
            <input type="text" name="name" placeholder="enter username">
            <br>
            <br>
            Password
            <br>
            <input type="password" name="pwd" placeholder="enter password">
            <br>
            <br>
            <input type="submit" value="login" name="submit">
            <input type="reset" value="reset">
        </form>
    </div>
</center>
</body>
</html>