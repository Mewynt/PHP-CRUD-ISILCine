<?php 
    function conexion($server,$base,$pelicula){
        try {
            $bd = new PDO("mysql:host=$server;dbname=$base", $pelicula);
            return $bd;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            exit;
        }
    }
    function dd($valor){
        echo "<pre>";
        var_dump($valor);
        echo "</pre>";
        exit;
    }
    function guardarPeli($db,$tabla,$datos){
        $titulo = $datos['titulo'];
        $calificacion = $datos['calificacion'];
        $premios = $datos['premios'];  
        $fechaCreacion = $datos['fechaCreacion'];
        $duracion = $datos['duracion'];  
        $genero = $datos['genero'];  
        $sql = "insert into $tabla (titulo,calificacion,premios,fechaCreacion,duracion,genero) values (:titulo,:calificacion,:premios,:fechaCreacion,:duracion,:genero)";

        $query = $db->prepare($sql);
        $query->bindValue(':titulo', $titulo);
        $query->bindValue(':calificacion',$calificacion);
        $query->bindValue(':premios',$premios);
        $query->bindValue(':fechaCreacion',$fechaCreacion);
        $query->bindValue(':duracion',$duracion);
        $query->bindValue(':genero',$genero);
        $query->execute();
    }
    function listarPelis($bd,$tabla){
        $sql = "select * from $tabla";
        $query = $bd->prepare($sql);
        $query->execute();
        $pelicula = $query->fetchAll(PDO::FETCH_ASSOC);
        return $pelicula;
    }

?>