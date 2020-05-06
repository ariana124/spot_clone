<?php include("includes/header.php");

// If there is an existing album matching the albumId then it will go to that page, and
// if it doesn't exist then it will redirect you back to the index page.
// This makes the variable $albumId contain the id of the album from the database
// so I can use it later to get more information about the album
if (isset($_GET['id'])) {
    $albumId = $_GET['id'];
}
else {
    header("Location: index.php");
}

$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id='$albumId'");
$album = mysqli_fetch_array($albumQuery);

$artistId = $album['artist'];

$artistQuery = mysqli_query($con, "SELECT * FROM artists WHERE id='$artistId'");
$artist = mysqli_fetch_array($artistQuery);

?>

<?php include("includes/footer.php"); ?>
