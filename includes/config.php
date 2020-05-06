<?php
    // Turns on output buffering.
    // When php pays loads it sends data to the servers in pieces.
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Los_Angeles");

    // Takes the parameters: servername, username, password, & database
    // The variable $con is the connection to the database.
    $con = mysqli_connect("localhost", "root", "", "spot_clone");

    if (mysqli_connect_errno()) {
        // The dot appends the error message (the dot is used to append strings).
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>
