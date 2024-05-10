

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    


</head>



<body>
    <!-- =====================================HEADER================================= -->
    <?php
require "pages/header.php";
?>

    <!-- =====================================MAIN================================= -->

<main>
<?php 
 if (isset( $_SESSION['uidUsers']) && $_SESSION['uidUsers'] != 'test')
    {
        echo "<h1>Welcome, {$_SESSION['uidUsers']}!</h1>";
        require 'IP_report_creator/index.php'; // Include index.php

    }

    elseif ( $_SESSION['uidUsers'] == 'test') {
        echo "<h1>Welcome, ADMIN!</h1>";

        require 'admin.php';
    }

else {
        echo "<h1>Please Login.</h1>";
}
?>

</main>


    <!-- =====================================FOOTER================================= -->
    <?php
require "pages/footer.php";
?>


</body>

</html>