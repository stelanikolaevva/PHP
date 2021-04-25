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
        <fieldset>
        <pre>
        <form action='#' method="post">
            Name:     <input type="text" name="Name"/> <br>
            Email:    <input type="text" name="Email"/> <br>
            Comment:  <textarea name="texta"></textarea>
            <input type='submit' name='subm' value='Submit'/>
            <input type="reset" name="res" value="Reset"/>
        </form>
        </pre>
        </fieldset>
        <?php
        include "config.php";
        if (isset($_POST['subm'])) {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $texta = $_POST['texta'];

            if (!empty($name) && !empty($email) && !empty($texta)) {
                $sql = "INSERT INTO guestbook (`Name`, `Email`, `Comment`, `DateTime`) VALUES (' $name', '$email', '$texta ',NOW());";
                if ($conn->query($sql) === TRUE) {
                    $last_id = $conn->insert_id;
                    echo '<a href="print.php">View Guestbook</a><br>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        ?>
    </body>
</html>

