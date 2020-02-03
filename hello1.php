
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
       $sql="insert into demo1_db(username,password)value('$user','$pass')";
       $res=mysqli_query($conn,$sql);
       if($res)
       {
           echo "succefully data insert";
           
       }
 else {
           echo "something went wrong";
           
       }
       
    }
}
?>