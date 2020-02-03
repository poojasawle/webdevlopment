<?php
$dbserver="localhost";
$dbuser="root";
$dbpassword="";
$dbname="demo1_db";
$conn=mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname); 
if($conn)
{
  $sql="update demo1_db  set username='pooja'where id=1";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo "sucessfully done";
    }
 else {
        echo 'no';    
    }
}    
?>

