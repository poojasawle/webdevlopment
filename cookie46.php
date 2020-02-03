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
          setcookie('user','pooja',time()+600);
             setcookie('password','123',time()+600);
      
        if($_COOKIE['user'])
        {
            echo "thank you for returning to my website";
        }
        
        ?>
    </body>
</html>
