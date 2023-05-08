<?php 
include('../conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();
$id = $_GET['id'];
// Definimos la consulta de que vamos a seleccionar los datos
$sql = "SELECT * FROM cursos WHERE id = '$id'";

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
<?php
            // Recorriendo el array con el resultado de la consulta
            while($cursos = mysqli_fetch_array($resultado)) {
                $curso_id = $cursos['id'];
                $nombre = $cursos['nombre'];
                $id_alumno = $cursos['id_alumno2'];
                $id_profesor = $cursos['id_profesor2'];
                $hora = $cursos['hora'];
                $abre = $cursos['abreviatura'];
                
            }
            ?>
    

    <div class="container">
        <div class="row">
              <div class="col-md-6 mt-5" >
                  <div class="card">
                      <div class="card-header --bs-body-color">
                         <div class="card-tittle text-black text-center"><strong>Actualizar Curso</strong></div> 
                      </div>                               
                      <div class="card-body">
                          <form name="formAlumno" action="editar_guardar_curso.php" method="post">
                             <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control">
                             </div> 
                             <div class="form-group">
                                <label>Alumno</label>
                                <input type="text" name="id_alumno2" value="<?php echo $id_alumno ?>" class="form-control">
                             </div> 
                             <div class="form-group">
                                <label>Profesor</label>
                                <input type="text" name="id_profesor2" value="<?php echo $id_profesor ?>" class="form-control">
                             </div>
                             <div class="form-group">
                                <label>Hora</label>
                                <input type="number" name="hora" value="<?php echo $hora ?>" class="form-control">
                             </div>
                             <div class="form-group">
                                <label>Abreviatura</label>
                                <input type="text" name="abreviatura" value="<?php echo $abre ?>" class="form-control">
                             </div>
                             <div>
                                <input type="hidden" name="curso_id" value="<?php echo $curso_id ?>">
                             </div>
                             <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                             </div>
                          </form>
                      </div>
                  </div>
              </div>
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