<?php 
include('../conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();

// Definimos la consulta de que vamos a seleccionar los datos
$sql = 'SELECT id, nombres_a, ape_paterno, ape_materno, email_a FROM alumno2';

// Ejecutamos el query en la conexion
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexion
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
   

    <div class="container mt-4">
        <div class="row">
            <div>
                <h4 class="text-center">ALUMNOS REGISTRADOS</h4>
                 <a href="add_alumno.html" type="button" class="btn btn-outline-primary" >Nuevo Alumno</a>
                 <a href="../principal/index.php" type="button" class="btn btn-outline-primary" >Menú</a>
            </div>

        </div>
        <table class="table mt-3">
            <thead>
                <tr class="encabezado text-center">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ACCIÓN</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Recorriendo el array con el resultado de la consulta
            while($alumno = mysqli_fetch_array($resultado)) {
                $alumno_id = $alumno['id'];
                $nombres = $alumno['nombres_a'];
                $ape_paterno = $alumno['ape_paterno'];
                $ape_materno = $alumno['ape_materno'];
                $email = $alumno['email_a'];

                echo '<tr>';
                echo '<td>' . $alumno_id . '</td>';
                echo '<td>' . $nombres . '</td>';
                echo '<td>' . $ape_paterno . '</td>';
                echo '<td>' . $ape_materno . '</td>';
                echo '<td>' . $email . '</td>';
                echo '<td><a href="editar_alumno.php?id='.$alumno_id['id'].'" class="btn btn-success">Editar</a> <a href="eliminar_alumno.php?id='.$alumno['id'].'" class="btn btn-danger">Eliminar</a></td>';
                
            }
            ?>
            </tbody>
        </table>
    </div>
    <style>
    body {
       background-color: antiquewhite;
       font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .table {
      
        background-color: aquamarine;
        
    }
    .encabezado {
        background-color: blue;

    }
    </style>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>