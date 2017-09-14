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
            
            $statement = $connection->prepare(" SELECT u.login_name, g.name from user_profile u inner join user_graduation ug inner join graduation_level g on u.id = ug.user_id and ug.graduation_id = g.id and ug.graduation_id = :graduationLevel;
");
            $statement->bindParam(':graduationLevel', $graduationLevel);
            $graduationLevel = 4; 
            
            $statement->execute();
            if ($row = $statement->fetch()) {
                echo $row['name'];
                echo '<br>';
                do {
                    echo $row['login_name'];
                    echo "<br>";
                }while ($row = $statement->fetch());
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
