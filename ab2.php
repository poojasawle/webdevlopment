<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
   $pass=$_POST['password'];
   $sql="select password from demo1_db where username='$user'";
   $res=mysqli_query($conn,$sql);
   
   if(mysqli_num_rows($res))
   {
   $x= mysqli_fetch_assoc($res);
   
   if($x['password']===$pass)
   {
       echo "you have succefully logged in";
   }
 else {
       header("location: a1php42.php");
   }
   }
    }
}

        ?>
    
