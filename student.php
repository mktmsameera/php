<?php  
    session_start();
    include 'connection.php';

    if(isset($_POST['submit'])){
        $con->query("insert into student (name,password) values('".$_POST['name']."','".md5($_POST['pwd'])."')");
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>User : <? echo $_SESSION['username']; ?> (<? echo $_SESSION['user_type']; ?> )</h1>
        <h2>Student Table</h2>
        <table width="100%" >
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
            <hr>
            <?php
                $result=$con->query("select * from student");
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td align='center'>".$row['id']."</td>";
                    echo "<td align='center'>".$row['name']."</td>";
                    echo "<td><form action='delete.php' method='post'><input type='hidden' value='".$row['id']."' name='id'><input type='hidden' value='student' name='type'><input type='submit' name='submit' value='delete'></form></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <hr>
        <form action="student.php" method="post">
                Name-:<input type="text" name="name" required> Password-:<input type="password" name="pwd" required>   <input type="submit" value="add" name="submit">
        </form>
    </body>
</html>
