<?php

$dbserver="localhost";
$dbuser="root";
$dbpassword="";
$dbname="demo1_db";
$conn=mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname); 
if($conn)
{
  $q="select*from demo1_db";
  $res=mysqli_query($conn,$q);
  if(mysqli_num_rows($res)>0)
  {
   $x=mysqli_fetch_assoc($res); 
   echo ($x);
  }
}
?>
