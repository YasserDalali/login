<?php
if (isset($_POST['signup-submit'])) {


    require 'dbh.inc.php'; # attempts to start a connection.


    /* FETCH INFO */

    $username = $_POST['uid'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwdr = $_POST['pwd-repeat'];
    if (empty($username) || empty($mail) || empty($pwd) || empty($pwdr)) {
        echo "empty field(s)";
        exit();
    }

    else if (!filter_var($mail, "FILTER_VALIDATE_EMAIL")) 
    {
        echo "invalid mail";
        exit();
    }

    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
    {
        echo "invalid username";
        exit();
    }


    else if ($pwd !== $pwdr) 
    {
        echo "please make sure you repeat the same password";
        exit();
    }

    $sql = "SELECT uidUsers FROM users where uidUsers={$username} AND pwdUsers={$pwd}";
     
}
