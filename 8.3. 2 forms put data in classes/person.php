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
        <form action="" method="POST">
            First Name:<input type="text" name="fn">
            <br><br>
            Last Name:<input type="text" name="ln">
            <br><br>
           Email:<input type="text" name="email">
            <br><br>
            <input type="submit" name="submit" value="Create and Show">
        </form>
        <?php
        class Person {
            public $FirstName;
            public $LastName;
            public $Email;
            
            function make_person($firstName, $lastName, $email) {
                $this->FirstName = $firstName;
                $this->LastName = $lastName;
                $this->Email = $email;
            }
            
            function show_person() {
                echo '<h2>'.$this->FirstName.' '.$this->LastName.'</h2>';
                echo '<p>'.$this->Email.'</p>';
            }
        }
        
        if(isset($_POST['submit'])){
            $firstName = $_POST['fn'];
            $lastName = $_POST['ln'];
            $email = $_POST['email'];
            
            $person = new Person;
            $person->make_person($firstName, $lastName, $email);
            $person->show_person();
        }
        ?>
    </body>
</html>
