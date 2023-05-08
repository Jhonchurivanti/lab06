<?php
include('../conexion.php');

// registrando la información del alumno
$nombres = $_POST['nombres'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
$email = $_POST['email'];

// Conectando a la base de datos

$conexion = conectar();

// Agragando con la consulta los datos del alumno a la base de datos

$sql = "INSERT INTO alumno2 (nombres_a, ape_paterno, ape_materno, email_a) VALUES ('$nombres', '$ape_paterno', '$ape_materno', '$email')";

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
    <title>Agregando nuevo alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <h4><strong>Obteniendo resultados</strong></h4>
              <?php
                  if (!$resultado) {
                    echo '<div class="alert alert-danger" role="alert">Error al registrar el alumno</div>';
                  }
                  else {
                    echo '<div class="alert alert-success" role="alert">Alumno registrado correctamente</div>';
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