<?php
include('../conexion.php');

// registrando la información del alumno
$nombres_a = $_POST['nombres_a'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
$email_a = $_POST['email_a'];
$alumno_id = $_POST['alumno_id'];

// Conectando a la base de datos

$conexion = conectar();

// Agragando con la consulta los datos del alumno a la base de datos

$sql = "UPDATE alumno2 set nombres_a='".$nombres_a."',ape_paterno='".$ape_paterno."', ape_materno='".$ape_materno."',email_a='".$email_a."' WHERE id='".$alumno_id."'";

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
    <title>Actualizando alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <h4><strong>Obteniendo resultados</strong></h4>
              <?php
                  if (!$resultado) {
                    echo '<div class="alert alert-danger" role="alert">Error al actualizar el alumno</div>';
                    echo '<td><a href="table_alumnos.php" class="btn btn-success">Regresar</a>';
                  }
                  else {
                    echo '<div class="alert alert-success" role="alert">Alumno actualizado correctamente</div>';
                    echo '<td><a href="table_alumnos.php" class="btn btn-success">Regresar</a>';
          
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