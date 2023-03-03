<html>
<head>
<meta charset="utf-8">
<title>cookies</title>
</head>

<body>
    
 <?php
$cookie_name = "user";
$cookie_value = "real name";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1day
?>
<?php
if(!isset($_COOKIE[$cookie_name])) {
          echo "cookie named '" . $cookie_name . "' is not set! ";
} else {
    
          echo "cookie '" . $cookie_name . "' is set! <br> " ;
          echo "value is:" . $_COOKIE[$cookie_name];
}
?>
    
    
      
    </body>

</html>