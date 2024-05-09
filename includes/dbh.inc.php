<?php

    $servername = "localhost";
    $DBusername = "root";
    $DBpwd = "";
    $DBname = "loginsystemphp";

    $cnx = mysqli_connect($servername, $DBusername, $DBpwd, $DBname);

    if (!$cnx) {
        die("Connection failed: ".mysqli_connect_error());
    }