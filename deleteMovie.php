<?php
include('connection.php');
$connection = connection();

$idMovie = $_GET['id'];
if (!empty($idMovie)) {
    $sql = "DELETE FROM movies WHERE id_movie='$idMovie'";
    $query = mysqli_query($connection,$sql);
    if ($query) {
        Header("Location: index.php");
    }
}
?>