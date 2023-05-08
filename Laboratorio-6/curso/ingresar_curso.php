<?php
include('../conexion.php');


// registrando el curso

$nombre = $_POST['nombre'];
$alumno_id = $_POST['alumno_id'];
$profesor_id = $_POST['profesor_id'];
$hora = $_POST['hora'];
$abreviatura = $_POST['abreviatura'];

// Conectando base de datos

$conexion = conectar();

// Agreando los datos a tabla cursos

$sql = "INSERT INTO cursos (nombre, id_alumno2, id_profesor2, hora, abreviatura) VALUES ('$nombre','$alumno_id', '$profesor_id','$hora','$abreviatura')";

// Ejecutando instruccion
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
    <title>Agregando nuevo alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <h4><strong>Obteniendo resultados</strong></h4>
              <?php
                  if (!$resultado) {
                    echo '<div class="alert alert-danger" role="alert">Error al registrar el curso</div>';
                    echo '<td><a href="table_cursos.php" class="btn btn-success">Regresar</a>';
                  }
                  else {
                    echo '<div class="alert alert-success" role="alert">Curso registrado correctamente</div>';
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
