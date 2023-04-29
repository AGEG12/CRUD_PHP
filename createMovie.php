<?php
include('connection.php');
$connection = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $releaseYear = $_POST['releaseYear'];
    $urlCover = $_POST['urlCover'];
    $synopsis = $_POST['synopsis'];

    // HACER VALIDACIÓN
    
    $sql = "INSERT INTO movies(title,release_year,url_cover,synopsis) VALUES('$title','$releaseYear','$urlCover','$synopsis')";
    $query = mysqli_query($connection,$sql);
    if ($query) {
        Header("Location: index.php");
    }
}
?>