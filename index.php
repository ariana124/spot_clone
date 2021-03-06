<?php include("includes/header.php"); ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">

    <?php
        $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

        // The while loop is going to loop through every result of the above query, and mysqli_fetch_array converts the results
        // of the query into an array and store each row of the albums database into the variable $row. 

        while ($row = mysqli_fetch_array($albumQuery)) {
            // The two dots are concatenating the 5 strings: the opening div, the image source, the second opening div, the
	    // album title string, and the closing divs.

            // The ? signifies the following value is a parameter.
	    // In the url, takes the id # to find its respective album from the database.
            echo "<div class='gridViewItem'>
                    <a href='album.php?id=" . $row['id'] . "'>
                        <img src='" . $row['artworkPath'] . "'>

                        <div class='gridViewInfo'>"
                            . $row['title'] .
                        "</div>
                    </a>
                </div>";
        }
    ?>

</div>

<?php include("includes/footer.php"); ?>
