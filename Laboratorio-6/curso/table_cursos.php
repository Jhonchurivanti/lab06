<?php 
include('../conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();

// Definimos la consulta de que vamos a seleccionar los datos
$sql = 'SELECT id, nombre, id_alumno2, id_profesor2, hora, abreviatura FROM cursos';

// $sql = "SELECT t1.id, t1.nombre, t1.id_alumno2, t1.id_profesor2, t1.hora, t1.abreviatura, t2.nombres FROM cursos t1 INNER JOIN profesor2 t2 ON t1.id_profesor2=t2.id WHERE t2.nombres";

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
    <title>Agregando nuevo curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
   

    <div class="container mt-4">
        <div class="row">
            <div>
                <h4 class="text-center">CURSOS REGISTRADOS</h4>
                 <a href="insert_curso.php" type="button" class="btn btn-outline-primary" >Nuevo Curso</a>
                 <a href="../principal/index.php" type="button" class="btn btn-outline-primary" >Menú</a>
            </div>

        </div>
        <table class="table mt-4">
            <thead class="encabezado">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Abreviatura</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Recorriendo el array con el resultado de la consulta
            while($cursos = mysqli_fetch_array($resultado)) {
                $curso_id = $cursos['id'];
                $nombre = $cursos['nombre'];
                $id_alumno2 = $cursos['id_alumno2'];
                $id_profesor2 = $cursos['id_profesor2'];
                $hora = $cursos['hora'];
                $abreviatura = $cursos['abreviatura'];

                echo '<tr>';
                echo '<td>' . $curso_id . '</td>';
                echo '<td>' . $nombre . '</td>';
                echo '<td>' . $id_alumno2 . '</td>';
                echo '<td>' . $id_profesor2 . '</td>';
                echo '<td>' . $hora . '</td>';
                echo '<td>' . $abreviatura . '</td>';
                echo '<td><a href="editar_curso.php?id='.$curso_id['id'].'" class="btn btn-success">Editar</a> <a href="eliminar_cursos.php?id='.$curso_id['id'].'" class="btn btn-danger">Eliminar</a></td>';
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