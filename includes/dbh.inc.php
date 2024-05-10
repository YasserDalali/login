<?php
    $user = 'root';
    $password = "";
    $host = 'localhost';
    $db = 'loginsystemphp';

    $cnx = mysqli_connect($host, $user, $password, $db);
    
    if (!$cnx) {
        echo "Error connecting to DB";
    }
