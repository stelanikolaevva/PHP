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
         class Article {

                private $Title;
                private $Author;
                private $Description;

                function make_article($t, $a, $d) {
                    $this->Title = $t;
                    $this->Author = $a;
                    $this->Description = $d;
                }

                function show_article() {
                    echo '<h2>' . $this->Title . '</h2>';
                    echo '<p>' . $this->Author . '</p>';
                    echo '<p>' . $this->Description . '</p>';
                }

            }

            echo '<br><br><fieldset>';
            echo '<form action="#" method="POST">';
            echo ' Title: <input type="text" name="title">';
            echo '   <br><br>';
            echo '   Author:<input type="text" name="author">';
            echo '    <br><br>';
            echo '     Description: <input type="text" name="description">';
            echo '     <br><br>';
            echo '     <input type="submit" name="subm" value="Create and Show">';
            echo '  </form>';
            echo '</fieldset>';
            if (isset($_POST['subm'])) {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $description = $_POST['description'];

                $article = new Article;
                $article->make_article($title, $author, $description);
                $article->show_article();
            }
        ?>
    </body>
</html>
