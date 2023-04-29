<?php
function connection() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'movies_db';

    $conn = mysqli_connect($host, $user, $password);
    mysqli_select_db($conn,$database);
    return $conn;
}
?>