<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>


<?php
    session_start();
    
    $_SESSION['username'] = "dani948a";
    echo $_SESSION['username'];



?>


</body>
</html>