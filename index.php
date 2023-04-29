<?php
include('connection.php');
$connection = connection();
$sql = "SELECT * FROM movies";
$query = mysqli_query($connection,$sql);
$movies = mysqli_fetch_all($query);
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
    <form class="card mx-auto col-md-6 m-3" action="createMovie.php" method="POST">
        <h3>Nueva película</h3>
        <input class="p-2 mb-2" type="text" name="title" placeholder="Título">
        <input class="p-2 mb-2" type="text" name="releaseYear" placeholder="Año de estreno">
        <input class="p-2 mb-2" type="url" name="urlCover" placeholder="Enlace de la portada">
        <textarea class="p-2 mb-2" name="synopsis" rows="5" placeholder="Sinopsis"></textarea>
        <input class="btn btn-success" type="submit" value="Guardar">
    </form>
    <main>
        <table class="container-md table table-dark table-striped">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Portada</th>
                    <th>Título</th>
                    <th>Año de estreno</th>
                    <th>Sinopsis</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($movies as $movie): ?>
                    <tr>
                        <td><?= $movie[0]; ?></td>
                        <td><img width="100px" src=<?= $movie[3] ?> alt=""></td>
                        <td><?= $movie[1] ?></td>
                        <td><?= $movie[2] ?></td>
                        <td><?= $movie[4] ?></td>
                        <td>
                            <a href="viewMovie.php?id=<?= $movie[0]; ?>&updating=true" class="btn btn-info">Editar</a>
                            <a href="deleteMovie.php?id=<?= $movie[0]; ?>" class="btn btn-danger">Eliminar</a>
                            <a href="viewMovie.php?id=<?= $movie[0]; ?>&updating=false" class="btn btn-success">Ver</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>