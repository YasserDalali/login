<?php
if (isset($_POST['signup-submit'])) {


    require 'dbh.inc.php'; # attempts to start a connection.


    /* FETCH INFO */

    $username = $_POST['uid'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwdr = $_POST['pwd-repeat'];


}
