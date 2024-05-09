<?php
if (isset($_POST['signup-submit'])) {


    require 'dbh.inc.php'; # attempts to start a connection.




    /* |>------------ FETCH INFO ----------------------------------------------*/

    $username = strtolower($_POST['uid']);
    $mail = strtolower($_POST['mail']);
    $pwd = $_POST['pwd'];
    $pwdr = $_POST['pwd-repeat'];



    /* |>------------ VALIDATE ENTRIES ----------------------------------------*/




    /* empty fields */
    if (empty($username) || empty($mail) || empty($pwd) || empty($pwdr)) {
        header("Location: ../signup.php?error=emptyFields");
        exit();
    }

    /* email */

    /*     

    else if (!filter_var($mail, "FILTER_VALIDATE_EMAIL")) 
    {
        header("Location: ../signup.php?error=InvalidEmail");
        exit();
    } 

    */

    /* regEX of username */ else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        echo "invalid username";
        header("Location: ../signup.php?error=InvalidUsername");
        exit();
    }

    /* Password validation */ else if ($pwd !== $pwdr) {
        header("Location: ../signup.php?error=PasswordUnmatching");
        exit();
    }



    /* |>---------------------------------- RUN QUERY ---------------------*/ else {
        $sql = "SELECT uidUsers FROM users where uidUsers='{$username}' OR emailUsers='{$mail}'"; /* AND pwdUsers={$pwd}" */
        $result = mysqli_query($cnx, $sql);
        if (mysqli_num_rows($result) == true) {
            header("Location: ../signup.php?error=usernameormailTaken");
        } else {
            $sql = "INSERT INTO Users (uidUsers, emailUsers, pwdUsers) VALUES ('{$username}', '{$mail}' ,'{$pwd}')";
            $result = mysqli_query($cnx, $sql);
            if ($result) {
                header("Location: ../signup.php?MazelTov");
            }
        }
    }
}
