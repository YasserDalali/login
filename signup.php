<?php
require "pages/header.php";
include "includes/signup.inc.php"
?>
<main>
<h1>sign-up</h1>





<form action="includes/signup.inc.php" method="POST" id="signupform">

    <input type="text" name="uid" placeholder="username">
    <input type="text" name="mail" placeholder="email">

    <input type="password" name="pwd" placeholder="password">
    <input type="password" name="pwd-repeat" placeholder="repeat password">
    <button type="submit" name="signup-submit" class="btn btn-dark">Sign-up</button>

</form>



</main>
<?php
require "pages/footer.php";
?>