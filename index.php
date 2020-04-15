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
    </head>
    <body>
        Hello!
    </body>
</html>
