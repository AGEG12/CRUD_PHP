<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('connection.php');
$connection = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $releaseYear = $_POST['releaseYear'];
    $urlCover = $_POST['urlCover'];
    $synopsis = $_POST['synopsis'];
    $idMovie = $_POST['idMovie'];

    // HACER VALIDACIÓN
    $sql = "UPDATE movies SET title='$title', release_year='$releaseYear', url_cover='$urlCover', synopsis='$synopsis' WHERE id_movie='$idMovie'";
    $query = mysqli_query($connection,$sql);
    if ($query) {
        Header("Location: index.php");
    }
}
?>