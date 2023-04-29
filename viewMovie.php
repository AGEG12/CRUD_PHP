<?php
include('connection.php');
$connection = connection();

$idMovie = $_GET['id'];
$updating = $_GET['updating'];
if (!empty($idMovie)) {
    $sql = "SELECT * FROM movies WHERE id_movie='$idMovie'";
    $query = mysqli_query($connection,$sql);
    $movie = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= $movie['url_cover'] ?>" alt="movie poster" class="img-fluid">
                </div>
                <?php if ($updating === 'true'): ?>
                    <form class="card col-md-6 m-3" action="updateMovie.php" method="POST">
                        <h3>Editar película</h3>
                        <input class="p-2 mb-2" type="text" name="title" placeholder="Título" value="<?= $movie['title'] ?>">
                        <input class="p-2 mb-2" type="text" name="releaseYear" placeholder="Año de estreno" value="<?= $movie['release_year'] ?>">
                        <input class="p-2 mb-2" type="url" name="urlCover" placeholder="Enlace de la portada" value="<?= $movie['url_cover'] ?>">
                        <textarea class="p-2 mb-2" name="synopsis" rows="5" placeholder="Sinopsis"><?= $movie['synopsis'] ?></textarea>
                        <input type="hidden" name="idMovie" value="<?= $movie['id_movie'] ?>">
                        <input class="btn btn-success" type="submit" value="Editar">
                        <a class="btn btn-warning" href="index.php">Regresar</a>
                    </form>
                <?php else: ?>
                    <div class="col-md-8">
                        <h1><?= $movie['title'] ?></h1>
                        <p><strong>Release Year:</strong><?= $movie['release_year'] ?></p>
                        <p><strong>Synopsis:</strong><?= $movie['synopsis'] ?></p>
                        <a class="btn btn-warning" href="index.php">Regresar a inicio</a>
                    </div>     
                <?php endif ?>
            </div>
        </div>
    </body>
</html>