<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab8-1</title>
    </head>
    <body>
        <?php
        class Books{
            private $Title;
            private $Author;
            private $Price;
            function Books($t,$a,$p) {
                $this->Title=$t;
                $this->Author=$a;
                $this->Price=$p;
            }
            function show_books()
            {
                $book="Книга: ".$this->Title.", ".$this->Author.", ".$this->Price."лв.";
                echo $book;
            }

        }
        $newb=new Books("PHP and MySQL","Стела Николаева","12");
        $newb->show_books();
        ?>
    </body>
</html>
