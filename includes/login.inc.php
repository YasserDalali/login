<?php
require "dbh.inc.php";
/* 
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="username / email">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="login-submit">Login</button>

*/


if (isset($_POST['login-submit'])) { 
    $usermail = $_POST['mailuid'];
    $password = $_POST['pwd'];



    $sql = "SELECT uidUsers, emailUsers, pwdUsers FROM users WHERE (uidUsers = '{$usermail}'
    OR emailUsers = '{$usermail}') AND pwdUsers = '{$password}'";
    $result = mysqli_query($cnx, $sql);
    

    if (mysqli_num_rows($result) === 1)
     {
        $row = mysqli_fetch_assoc($result);
        print($row);
        session_start();

        $_SESSION['uidUsers'] = $row['uidUsers'];

        header("Location: ../main.php?logged");
     }


    else {
        header("Location: ../main.php?unlogged");
        exit();
    }
}

else {
    header("Location: ../main.php");
    exit();
}