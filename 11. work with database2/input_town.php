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
        <pre>
        <form action='#' method="post">
            Град:<input type='text' name='city'/><br>
            <input type='submit' name='subm' value='Изпрати'/>
        </form>
        </pre>
         <?php
        include "config.php";
        if (isset($_POST['subm'])) {
            $city = $_POST['city'];
            if (!empty($city)) {
                $sql3 = "INSERT INTO City (Name) VALUES ('$city')";
                if ( $dbConn->query($sql3) === TRUE) {
                    $last_id =  $dbConn->insert_id;
                    echo "Успесно добавен нов запис с код: " . $last_id;
                    echo '   <a href="index.php">Назад</a><br>';
                } else {
                    echo "Error: " . $sql . "<br>" .  $dbConn->error;
                }
                $result = mysqli_query($dbConn, "SELECT * FROM City");
        echo "<table border=2px><tr><th>ID</th><th>City</th></tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>" . $row['CityID'] . "</td><td>" . $row['Name'] ."</td></tr>";
        }
        echo "</table>";
            }
        }
            ?>
    </body>
</html>
