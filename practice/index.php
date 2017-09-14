<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $servername = "localhost";
        $username = "root";
        $password = "aspire@123";
        $dbname = "user_management_system";
        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $statement = $connection->prepare("SELECT u1.login_name, u2.login_name from user_profile u1 cross join user_profile u2 where u1.login_name <> u2.login_name");
            $statement->execute();
            while ($row = $statement->fetch()) {
                echo $row[1];
                echo $row[0];
                echo "<br>";
            }
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        
        $connection = null;
        ?>
    </body>
</html>
