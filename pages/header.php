<?php
session_start();
?>

<header>
    <nav>
        <a href="">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4c/Bandar_Abbas_government_logo.svg/200px-Bandar_Abbas_government_logo.svg.png" alt="logo" width="50px">
        </a>
<!-- 
        <ul>
            <li>page0</li>
            <li>page1</li>
            <li>page2</li>
            <li>page3</li>
        </ul> -->
        <div>
            <!-- ----------------LOGIN FORM------------------------ -->

<?php

 if (isset($_SESSION['uidUsers']))
 {
   echo     
   '<form action="includes/logout.inc.php" method="post">'
   .
    $_SESSION['uidUsers']
   .
   '<button style="margin-left: 1rem;" type="submit" name="logout-submit">Logout</button>
    </form>'; 
 }

 else {

    echo             '<form action="includes/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="username / email">
    <input type="password" name="pwd" placeholder="password">
    <button type="submit" name="login-submit" class="btn btn-dark">Login</button>
    <small><a href="signup.php">Sign-up</a></small>
</form>';
} 

 
?>
             


        </div>
    </nav>
</header>