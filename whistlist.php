<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <body>
        <form name="wishlist" action="whistlist.php">
            <input type="submit" value="Show Data" />
        </form>
        <?php
        include("connect.php");
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $firstName = $_POST['user'];
            $password = $_POST['pass'];

            $insert = "insert into sys_user (fname, password) "
                . "values ('".($firstName)."','".($password)."')";
            if($con->query($insert)===true){
                $insertId = $con->insert_id;
                echo "insert sucess!".$insertId;
            } else {
                echo "insert error:".$con->error;
            }    
        } else {
            $show = "select * from sys_user where fname != ''";
            $result = $con->query($show);
            if($result->num_rows>0){
                echo "<table class='data'><tr><th>Name</th><th>Password</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["fname"]."</td><td>".$row["password"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "tidak ada data";
            }
        }
        
        $con->close();
        ?>
    </body>
</html>
