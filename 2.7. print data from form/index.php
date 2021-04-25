<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-7</title>
    </head>
    <body>
        <h2>Registration form</h2>
        <form action="zad7.php" method="Post" >
            Name<br> <input type="text" name="first_name" value="Input your name"><br>
            Family<br> <input type="text" name="last_name" ><br>
            E-mail<br> <input type="text" name="email" ><br>
            <p>Choose a course:<br>
                <input type="radio" name="kurs" value="PHP">PHP<br>
                <input type="radio" name="kurs" value="Lisp">Lisp<br>
                <input type="radio" name="kurs" value="Perl">Perl<br>
                <input type="radio" name="kurs" value="Unix">Unix<br>
            <p>Additional information about you:<br>
                <textarea name="comment" cols="32" rows="5"></textarea>
            <p><input name="confirm" type=checkbox checked> Confrim the receiving of the information <br> 
                <input type="submit" value="submit">
                <input type="reset" value="reset">
        </form>
    </body>
</html>

