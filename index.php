<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="includes/style.inc.css">
</head>



<body>
    <!-- =====================================HEADER================================= -->
<header>
    <nav>
        <a href="">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4c/Bandar_Abbas_government_logo.svg/200px-Bandar_Abbas_government_logo.svg.png" alt="logo" width="50px">
        </a>

        <ul>
            <li>page0</li>
            <li>page1</li>
            <li>page2</li>
            <li>page3</li>
        </ul>
        <div>
            <!-- ----------------LOGIN FORM------------------------ -->
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="username / email">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="login-submit">Login</button>

                <a href="signup.php">Signup</a>
            </form>
            <!-- ----------------LOGOUT FORM------------------------ -->

            <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
    </nav>
</header>

    <!-- =====================================MAIN================================= -->

<main>

    <p>You are logged out!</p>
    <p>You are logged in!</p>

</main>




    <?php


    ?>


</body>

</html>