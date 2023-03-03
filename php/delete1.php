<?php


include ("connection.php");


if(isset($_GET["deleteid"])){
    
    
    $id=$_GET["deleteid"];
    
    
    $delete=mysqli_query($con,"DELETE FROM `abctable` where id='$id'");
    
    
    echo header("location:display.php");
    
    
}


else {
    
    
    echo header("location:display.php");
    echo "something went wrong";
  
    
}


?>