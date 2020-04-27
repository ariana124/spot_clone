<?php
//allows index page to use session without creating another session here
include("includes/config.php");

//session_destroy(); only include this when you want to logout manually (refreshing the index page)

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SpotClone</title>
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    </head>
    <body>

        <div id="mainContainer">

            <div id="topContainer">

                <!-- at runtime pastes the code from the navBarContainer.php file here into the index.php -->
                <?php include("includes/navBarContainer.php"); ?>

            </div>

            <?php include("includes/nowPlayingBar.php"); ?>

        </div>

    </body>
</html>
