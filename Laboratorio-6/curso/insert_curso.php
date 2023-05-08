<?php
include('../conexion.php')
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <div class="col-md-6 mt-5" >
                  <div class="card">
                      <div class="card-header --bs-body-color">
                         <div class="card-tittle text-black text-center"><strong>Registro de nuevo Curso</strong></div> 
                      </div>                               
                      <div class="card-body">
                          <form name="formAlumno" action="ingresar_curso.php" method="post">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" required placeholder="">
                            </div> 
                            <div class="form-group">
                                <label>Alumno</label>
                                <select name="alumno_id" class="form-control">
                                    <?php
                                    $conexion = conectar();
                                    $sql="SELECT * FROM alumno2";
                                    $resultado=mysqli_query($conexion, $sql);
                                    while($filas=mysqli_fetch_array($resultado)) {
                                       echo "<option value='".$filas['id']."'>".$filas['nombres']." ".$filas['ape_paterno']." ".$filas['ape_materno']."</option>";
                                    }
                                    ?>

                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Profesor</label>
                                <select name="profesor_id" class="form-control">
                                    <?php
                                    $conexion = conectar();
                                    $sql="SELECT * FROM profesor2";
                                    $resultado=mysqli_query($conexion, $sql);
                                    while($filas=mysqli_fetch_array($resultado)) {
                                       echo "<option value='".$filas['id']."'>".$filas['nombres']." ".$filas['apellidos']."</option>";
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hora</label>
                                <input type="number" name="hora" class="form-control"  required placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Abreviatura</label>
                                <input type="text" name="abreviatura" class="form-control"  required placeholder="">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
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