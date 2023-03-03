<?php

include("connection.php");

$id=$_GET['editid'];

echo $id;

$select=mysqli_query($con,"select * from abctable where id='$id'");


while($row=mysqli_fetch_array($select)) {
    
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    
}
?>


<html>
<head>
    <title>WE KNOW</title>
<body>

    <form action="register.php?editid=<?php echo $id ?>" method="post">
    
<p><label>name:</label><input type="text" name="name" placeholder="name" value="<?php echo $name ?>"></p>    
    
<p><label>email:</label><input type="email" name="email" placeholder="email" value="<?php echo $email ?>"></p>  
        
<p><label>password:</label><input type="text" name="password" placeholder="password" value="<?php echo $password ?>"></p>
<p><input type="submit" name="submit" name="submit" value="register"></p>        
            
            
    
    </form>
    
</body>        
</head>
</html>