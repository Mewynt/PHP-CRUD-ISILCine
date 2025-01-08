<?php
  include_once('./controladores/funciones.php');
  $bd = conexion('localhost','cine_isil','root');
  if($_POST){
    //dd('El usuario le dio Registrarme');
    guardarPeli($bd,'movies',$_POST);
    header('location:index.php');
};
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
    <nav class="navbar bg-dark">
      <div class="container-fluid ">
        <a class="navbar-link text-white fs-6 text-decoration-underline" href="index.php"><i class="bi bi-house-heart"></i> REGRESEMOS A LA LISTA</a>
      </div>
    </nav>
  </header>
  <section class="registerpeli">
  <div class="formulario container-fluid">
  <br>
  <h1 class="text-while text-white fs-1 fw-bold text-center">REGISTRA TU PELICULA</h1>
  <br>
    <form class="col-6 m-auto text-white" action="" method="POST">
          <div class="mb-3">
              <label for="titulo" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo">
          </div>
          <div class="mb-3">
              <label for="calificacion" class="form-label">Calificacion (0-10)</label>
              <input type="number" min="0" max="10" class="form-control" id="calificacion" name="calificacion">
          </div>
          <div class="mb-3">
              <label for="premios" class="form-label">Premios (Nro. Oscars)</label>
              <input type="number" class="form-control" id="premios" name="premios">
          </div>
          <div class="mb-3">
              <label for="fechaCreacion" class="form-label">Fecha de Lanzamiento</label>
              <input type="date" min="1900-01-01" max="2024-10-31" class="form-control" id="fechaCreacion" name="fechaCreacion">
          </div>
          <div class="mb-3">
              <label for="duracion" class="form-label">Duracion</label>
              <input type="time" class="form-control" id="duracion" name="duracion">
          </div>
          <div class="mb-3">
              <label for="genero" class="form-label">Genero (e.j: accion, aventura, etc)</label>
              <input type="text" class="form-control" id="genero" name="genero">
          </div class="container">
          <button type="submit" class="btn btn-outline-light mx-auto d-block">Registrarme</button>
          <br>
          <br>
    </form>
  </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
<footer class="container-fluid">
  <div class="row p-4 bg-dark text-white text-center">
    <p>TODOS LOS DERECHOS RESERVADOS @ISILCINE</p>
  </div>
</footer>
</html>