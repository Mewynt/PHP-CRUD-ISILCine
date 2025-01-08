<?php
    include_once('./controladores/funciones.php');
    $bd = conexion('localhost','cine_isil','root');
    $pelicula = listarPelis($bd,'movies');
    //dd($usuarios);
    //dd($usuarios[3]['nombre']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINE ISIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿ESTAS SEGURO?, se eliminaran los datos');
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" style="background-color: none" width="230px" height="85px">
            </a>
            <div class="navbar" id="navbarText">
                <span class="navbar-text fs-3">AREA DE PELICULAS ISIL</span>
            </div>
        </div>
    </nav>
    <nav class="bg-dark d-flex align-items-start">
        <div class="container-fluid">
            <a class="navbar-link text-white fs-6 text-decoration-underline" href="registroPeli.php"><i class="bi bi-camera-reels"></i> AGREGA UNA NUEVA PELICULA AQUI</a>
            <a class="navbar-link text-white fs-6 text-decoration-underline" href="administrarPeliculas.php"><i class="bi bi-pencil"></i> ADMINISTRAR</a>
        </div>
    </nav>
    <div>
    <h2 class="text-center mt-3 mb-3 display-4">ADMINISTRA TUS PELICULAS</h2>
    </div>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">VER</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                for($i = 0; $i < count($pelicula); $i++):?> 
                <tr>
                    <th scope="row"><?= $pelicula[$i]["id"] ?></th>
                    <td><?= $pelicula[$i]["titulo"] ?></td>
                    <td><a class="btn btn-primary" href="./detallePelicula.php?id=<?= $pelicula[$i]["id"] ?>"><i class="bi bi-eye-fill"></i></a></td>
                    <td><a class="btn btn-success" href="./editarPelicula.php?id=<?= $pelicula[$i]["id"] ?>"><i class="bi bi-pencil-fill"></i></a></td>
                    <td><a class="btn btn-danger" href="./eliminarPelicula.php?id=<?= $pelicula[$i]["id"] ?> " onclick='return confirmar()'><i class="bi bi-trash-fill"></i></a></td>
                </tr>
                <?php endfor;?>
            </tbody>
    </table>
</body>
    