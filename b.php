<?php
if(isset($_POST['login']))
{
    $user="pooja";
    $pass="321";
    if($user===$_POST['user']&& $pass===$_POST['password'])
    {
        header("location:index.php");
    }
 else 
    {
      header("location:apage.php");
    }
}
else
    {
    
    header("location:apage.php");
}

?>