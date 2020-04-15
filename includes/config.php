<?php
    // turns on output buffering
    // when php pays loads it sends data to the servers in pieces
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Los_Angeles");

    // takes the parameters: servername, username, password, & database
    $con = mysqli_connect("localhost", "root", "", "spot_clone");

    if (mysqli_connect_errno()) {
        // the dot appends the error message
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>
