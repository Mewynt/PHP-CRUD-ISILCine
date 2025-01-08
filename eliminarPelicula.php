<?php
          include_once('./controladores/funciones.php');
          $bd = conexion('localhost','cine_isil','root');
          // dd($id);
          $id = intval($_GET['id']);
          try {
            $sql = "DELETE FROM movies WHERE id = :id"; 
            // Usar un parámetro para mayor seguridad
            $stmt = $bd->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
            // Vincular el parámetro de forma segura
            $resultado = $stmt->execute();
        
            if ($resultado) {
                echo "<script>alert('Los datos se eliminaron correctamente de la BD'); location.assign('index.php');</script>";
            } else {
                echo "<script>alert('Los datos NO se eliminaron correctamente de la BD'); location.assign('index.php');</script>";
            }
        } catch (PDOException $e) {
            echo "<script>alert('Error al eliminar: " . $e->getMessage() . "'); location.assign('index.php');</script>";
        }
        ?>