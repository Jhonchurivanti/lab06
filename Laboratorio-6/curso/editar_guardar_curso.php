<?php
include('../conexion.php');

// registrando la información del alumno
$nombre = $_POST['nombre'];
$alumno = $_POST['id_alumno2'];
$profesor = $_POST['id_profesor2'];
$hora = $_POST['hora'];
$abre = $_POST['abreviatura'];
$curso_id = $_POST['curso_id'];

// Conectando a la base de datos

$conexion = conectar();

// Agragando con la consulta los datos del alumno a la base de datos

$sql = "UPDATE cursos set nombre='".$nombre."',id_alumno2='".$alumno."', id_profesor2='".$profesor."',hora='".$hora."',abreviatura='".$abre."' WHERE id='".$curso_id."'";

// Ejecuntando la instruccion SQL
$resultado = mysqli_query($conexion, $sql);

// Cerrando la conexion

desconectar($conexion);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <h4><strong>Obteniendo resultados</strong></h4>
              <?php
                  if (!$resultado) {
                    echo '<div class="alert alert-danger" role="alert">Error al actualizar el curso</div>';
                    echo '<td><a href="table_alumnos.php" class="btn btn-success">Regresar</a>';
                  }
                  else {
                    echo '<div class="alert alert-success" role="alert">Curso actualizado correctamente</div>';
                    echo '<td><a href="table_cursos.php" class="btn btn-success">Regresar</a>';
                  }
              ?>
        </div>  
  </div>
  <style>
    body {
       background-color: antiquewhite;
       font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    </style>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>