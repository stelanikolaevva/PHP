<!DOCTYPE html>
<?php 
unset($_COOKIE["user"]);
setcookie("user", "", time() - 3600);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE["user"])) {
            print 'Cookie does not exist...';
        } 
        else {
            echo "All coockies:";
            print_r($_COOKIE);
        }
        ?>
    </body>
</html>
