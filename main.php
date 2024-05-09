

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
    <?php
require "pages/header.php";
?>

    <!-- =====================================MAIN================================= -->

<main>
<?php 
 if (isset( $_SESSION['uidUsers']))
    {
        echo "<p>Welcome, {$_SESSION['uidUsers']}!</p>";
    }
else {
        echo "<p>Please Login.</p>";
}
?>

</main>


    <!-- =====================================FOOTER================================= -->
    <?php
require "pages/footer.php";
?>


</body>

</html>