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
    $dbserver="localhost";
$dbuser="root";
$dbpassword="";
$dbname="demo1_db";
$conn=mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname); 
if($conn)
{
    if(isset($_POST['submit']))
    {
        $user=$_POST['username'];
        $user=  mysqli_real_escape_string($conn,$user);
        $sql="select* from demo1_db where username='$user'";
        $res=  mysqli_query($conn,$sql);
        $x=mysqli_fetch_assoc($res);
        echo $x['username'];
        
    }
}
        ?>
        <form action ="a43.php"method="POST">
            <input type="text"name="username"placeholder="enter username">
               <input type="submit"value="submit"name="submit">
        </form>
    </body>
</html>
