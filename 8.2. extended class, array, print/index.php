<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab8-2</title>
    </head>
    <body>
        <?php

        class Person {

            private $first_name;
            private $last_name;

            function make_person($fn, $ln) {
                $this->first_name = $fn;
                $this->last_name = $ln;
            }

            function show_person() {
                $pers = $this->first_name . " " . $this->last_name;
                echo $pers;
            }

        }

        class Programmer extends Person {

            public $langs = array("Lisp");

            function set_lang($new_lang) {
                $this->langs[] = $new_lang;
            }

        }

        $Programmer1 = new Programmer;
        $Programmer1->make_person("Stela", "Nikolaeva");
        $Programmer1->set_lang("Java");
echo "<pre>";
        echo "Hello!<br>My name is, " . $Programmer1->show_person() ."I know:<br> ";
        print_r($Programmer1->langs);
        echo  "<br>I know also PHP<br>";
        $Programmer1->set_lang("PHP");
         print_r($Programmer1->langs);
         echo "</pre>";
        ?>
    </body>
</html>
