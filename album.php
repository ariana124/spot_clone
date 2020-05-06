<?php include("includes/header.php");

// This makes the variable albumId contain the id of the album from the database
// so I can use it later to get more information about the album
if (isset($_GET['id'])) {
    $albumId = $_GET['id'];
}
else {
    header("Location: index.php");
}

$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id='$albumId'");
$album = mysqli_fetch_array($albumQuery);

echo $album['title'];
?>

<?php include("includes/footer.php"); ?>
