<?php 
include('../conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();

// Definimos la consulta de que vamos a seleccionar los datos
$sql = 'SELECT id, nombres, apellidos, email FROM profesor2';

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
    <title>Agregando nuevo profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
   

    <div class="container mt-4">
        <div class="row">
            <div>
                <h4 class="text-center">PROFESORES REGISTRADOS</h4>
                 <a href="add_profesor.html" type="button" class="btn btn-outline-primary" >Nuevo Profesor</a>
                 <a href="../principal/index.php" type="button" class="btn btn-outline-primary" >Menú</a>
            </div>

        </div>
        <table class="table mt-4">
            <thead>
                <tr class="encabezado">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">EMAIL</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Recorriendo el array con el resultado de la consulta
            while($profesor = mysqli_fetch_array($resultado)) {
                $profesor_id = $profesor['id'];
                $nombres = $profesor['nombres'];
                $apellidos = $profesor['apellidos'];
                $emai = $profesor['email'];

                echo '<tr>';
                echo '<td>' . $profesor_id . '</td>';
                echo '<td>' . $nombres . '</td>';
                echo '<td>' . $apellidos . '</td>';
                echo '<td>' . $emai . '</td>';
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