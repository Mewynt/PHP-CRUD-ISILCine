<?php
     include_once('./controladores/funciones.php');
     $bd = conexion('localhost','cine_isil','root');
     $id = intval($_GET['id']);
     //dd($id);
     //Armar la consulta
     $sql = "select * from movies where id = $id";
     //Preparar la consulta
     $query = $bd->prepare($sql);
     //Ejecutar la cnsulta
     $query->execute();
     //dd($query);
     $pelicula = $query->fetch(PDO::FETCH_ASSOC);
     //dd($empleado);
     
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
 </head>
<body>
  <header>
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
    
    
  </header>
  <main>
  <br>
    <section>
      <img src="img/film.jpg" class="rounded mx-auto d-block" width="400px" height="400px" alt="...">
    </section>
    <br>
        <h2 class="text-center mt-3 mb-3 display-4"><?= $pelicula['titulo'] ?></h2>
        <div class="table-responsive">
          <ul class="list-group">
            <li class="list-group-item">CALIFICACION: <?= $pelicula['calificacion'] ?></li>
            <li class="list-group-item">PREMIOS:  <?= $pelicula['premios'] ?></li>
            <li class="list-group-item">FECHA LANZAMIENTO:  <?= $pelicula['fechaCreacion'] ?></li>
            <li class="list-group-item">GENERO: <?= $pelicula['genero'] ?></li>
            <li class="list-group-item">DURACION: <?= $pelicula['duracion'] ?></li>
          </ul>
        </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer class="container-fluid">
  <div class="row p-4 bg-dark text-white text-center">
    <p>TODOS LOS DERECHOS RESERVADOS @ISILCINE</p>
  </div>
</footer>
</html>