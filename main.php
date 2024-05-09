

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
        echo "<p>You are logged in!</p>";
    }
else {
        echo "<p>You are NOT logged in.</p>";
        
    echo "USERID: " . $_SESSION['uidUsers'];

}
?>

</main>


    <!-- =====================================FOOTER================================= -->
    <?php
require "pages/footer.php";
?>


</body>

</html>