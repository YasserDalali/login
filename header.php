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