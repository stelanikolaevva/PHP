<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Wlcome ".$_COOKIE["user"]."<br>";
        echo "All cookies:<br>";
        print_r($_COOKIE);
        ?>
        <br><a href="last.php">Next page - delete cookie</a>
    </body>
</html>
