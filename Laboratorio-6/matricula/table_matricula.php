<?php 
include('../conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();

// Definimos la consulta de que vamos a seleccionar los datos
// $sql = 'SELECT id, id_alumno2, id_cursos, id_profesor2 FROM matricula2';
$sql = "SELECT alu.id, alu.nombres_a, alu.ape_paterno, alu.ape_materno, alu.email_a, cur.nombre, cur.hora, cur.abreviatura, pro.nombres, pro.apellidos, pro.email FROM alumno2 alu INNER JOIN cursos cur ON alu.id = cur.id_alumno2 INNER JOIN profesor2 pro ON pro.id = cur.id_profesor2";

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
                <h4 class="text-center">MATRÍCULAS REGISTRADOS</h4>
                 <a href="add_matricula.php" type="button" class="btn btn-outline-primary" >Nueva Matricula</a>
                 <a href="../principal/index.php" type="button" class="btn btn-outline-primary" >Menú</a>
            </div>

        </div>
        <table class="table mt-3">
            <thead>
                <tr class="encabezado">
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">ALUMNO</th>
                    <th scope="col" class="text-center">EMAIL</th>
                    <th scope="col" class="text-center">CURSO</th>
                    <th scope="col" class="text-center">HORA</th>
                    <th scope="col" class="text-center">ABREVIATURA</th>
                    <th scope="col" class="text-center">DOCENTE</th>
                    <th scope="col" class="text-center">EMAIL</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Recorriendo el array con el resultado de la consulta
            while($matricula2 = mysqli_fetch_array($resultado)) {
                $id = $matricula2['id'];
                $alumno = $matricula2['nombres_a'];
                $ape_paterno = $matricula2['ape_paterno'];
                $ape_materno = $matricula2['ape_materno'];
                $email_a = $matricula2['email_a'];
                $curso = $matricula2['nombre'];
                $hora = $matricula2['hora'];
                $abre = $matricula2['abreviatura'];
                $profesor = $matricula2['nombres'];
                $apellidos = $matricula2['apellidos'];
                $email = $matricula2['email'];
                echo '<tr>';
                echo '<td>' . $id . '</td>';
                echo '<td>' . $alumno ," ", $ape_paterno," ", $ape_materno . '</td>';
                echo '<td>' . $email_a . '</td>';
                echo '<td>' . $curso . '</td>';
                echo '<td>' . $hora . '</td>';
                echo '<td>' . $abre . '</td>';
                echo '<td>' . $profesor , " ", $apellidos . '</td>';
                echo '<td>' . $email . '</td>';
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