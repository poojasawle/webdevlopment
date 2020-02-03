<?php
$dbserver="localhost";
$dbuser="root";
$dbpassword="";
$dbname="demo1_db";
$conn=mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname); 
if($conn)
{
    echo "yes we did it";
}
 else {
    echo "something went wrong";
   }
?>

