<?php
require "dbh.inc.php";



    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM `users` WHERE idUsers='$id'";
    $results = mysqli_query($cnx, $sql);
    header('Location: ../main.php');
