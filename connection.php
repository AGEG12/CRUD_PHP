<?php
function connection() {

    $DB_HOST = $_ENV['DB_HOST'];
    $DB_USER = $_ENV['DB_USER'];
    $DB_PASSWORD = $_ENV['DB_PASSWORD'];
    $DB_NAME = $_ENV['DB_NAME'];
    $DB_PORT = $_ENV['DB_PORT'];
    
    $db = mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
/*     $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'movies_db';

    $conn = mysqli_connect($host, $user, $password);
    mysqli_select_db($conn,$database); */
    return $conn;
}
?>