<?php
if(isset($_POST['submit']))
{
    $image=$_FILES['image'];
    print_r($image);
      echo "file name is".$image['name']."<br>";
  echo "file size is".$image['size']."<br>";
    echo "temp dir is".$image['tmp_name']."<br>";
      echo "file type is".$image['type']."<br>";
      move_uploaded_file($image['tmp_name'],"img/".$image['name']);
    }
    ?> 