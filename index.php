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

                <div id="navBarContainer">
                    <nav class="navBar">
                        <a href="index.php" class="logo">
                            <img src="assets/images/icons/logo.png">
                        </a>

                        <div class="group">
                            <div class="navItem">
                                <a href="search.php" class="navItemLink">Search</a>
                                <img src="assets/images/icons/search.png" class="icon" alt="Search">
                            </div>
                        </div>

                        <div class="group">
                            <div class="navItem">
                                <a href="browse.php" class="navItemLink">Browse</a>
                            </div>

                            <div class="navItem">
                                <a href="yourMusic.php" class="navItemLink">Your Music</a>
                            </div>

                            <div class="navItem">
                                <a href="profile.php" class="navItemLink">AB</a>
                            </div>
                        </div>

                    </nav>
                </div>

            </div>

            <div id="nowPlayingBarContainer">

                <div id="nowPlayingBar">

                    <div id="nowPlayingLeft">
                        <div class="content">
                            <span class="albumLink">
                                <img src="http://clipart-library.com/img/2008830.jpg" class="albumArtwork">
                            </span>

                            <div class="trackInfo">

                                <span class="trackName">
                                    <span>No Squares</span>
                                </span>

                                <span class="artistName">
                                    <span>AB</span>
                                </span>

                            </div>

                        </div>
                    </div>

                    <div id="nowPlayingCenter">
                        <div class="content playerControls"> <!-- these are 2 classes -->

                            <div class="buttons">

                                <button class="controlButton shuffle" title="shuffle button">
                                    <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                                </button>

                                <button class="controlButton previous" title="previous button">
                                    <img src="assets/images/icons/previous.png" alt="Previous">
                                </button>

                                <button class="controlButton play" title="play button">
                                    <img src="assets/images/icons/play.png" alt="Play">
                                </button>

                                <button class="controlButton pause" title="pause button" style="display: none;">
                                    <img src="assets/images/icons/pause.png" alt="Pause">
                                </button>

                                <button class="controlButton next" title="next button">
                                    <img src="assets/images/icons/next.png" alt="Next">
                                </button>

                                <button class="controlButton repeat" title="repeat button">
                                    <img src="assets/images/icons/repeat.png" alt="Repeat">
                                </button>

                            </div>

                            <div class="playbackBar">

                                <span class="progressTime current">0:00</span>

                                <div class="progressBar">
                                    <div class="progressBarBg">
                                        <div class="progress"></div>
                                    </div>
                                </div>

                                <span class="progressTime remaining">0:00</span>

                            </div>

                        </div>
                    </div>

                    <div id="nowPlayingRight">
                        <div class="volumeBar">

                            <button class="controlButton volume" title="Volume button">
                                <img src="assets/images/icons/volume.png" alt="Volume">
                            </button>

                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </body>
</html>
