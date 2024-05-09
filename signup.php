<?php
require "header.php";
?>
    <link rel="stylesheet" href="includes/style.inc.css">
<main>
<h1>sign-up</h1>
<form action="includes/singup.inc.php" method="post" id="signupform">
    <input type="text" name="uid" placeholder="username">
    <input type="text" name="mail" placeholder="email">

    <input type="password" name="pwd" placeholder="password">
    <input type="password" name="pwd-repeat" placeholder="repeat password">
    <button type="submit" name="signup-submit">Signup</button>
</form>
</main>
<?php
require "footer.php";
?>