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

        <div id="nowPlayingBarContainer">

            <div id="nowPlayingBar">

                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink">
                            <img src="https://lh3.googleusercontent.com/proxy/dhCPsxzTrMxWKO0cWPrNbxd5K9_XP1jW8F93R5HOmze0xz1cS_MFTxXZBUrS_wdDaTYOfjSV2j8C6x8cGVTYPz_3" class="albumArtwork">
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

    </body>
</html>
