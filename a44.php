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
        $pass="password";
        $pass=password_hash($pass,PASSWORD_BCRYPT);
        echo $pass;
        echo strlen($pass);
        if(password_verify('password',$pass))
        {
            echo"<br>";
            echo"your password is correct";
        }
        // put your code here
        ?>
    </body>
</html>
