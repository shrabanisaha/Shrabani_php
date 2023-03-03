<?php

include("connection.php");

$display=mysqli_query($con,"SELECT * FROM `abctable`");


echo"<table>
<tr>
<th> id </th>
<th> name </th>
<th> email </th>
<th> password </th>
</tr>";



while ($row = mysqli_fetch_array($display)){
    
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    
    echo "<tr>
    
    <td>$id</td>
    <td>$name</td>
    <td>$email</td>
    <td>$password</td>
    <td><a href='edit.php?editid=$id'> <button>EDIT</button></a></td>
    <td><a href='delete1.php?deleteid=$id'> <button >Delete</button></a></td>
    </tr>";
    

    
}




echo "</table>"
    
    
?>    
    





    