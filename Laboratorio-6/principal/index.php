<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
   

    <div class="container">
        <div class="row mt-4">
            <div>
                <h4 class="text-center mt-2">PLATAFORMA WEB DE MATRÍCULAS</h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Opciones
                </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../alumno/add_alumno.html">Registrar Alumno</a></li>
                <li><a class="dropdown-item" href="../profesor/add_profesor.html">Registrar Profesor</a></li>
                <li><a class="dropdown-item" href="../curso/insert_curso.php">Registrar Curso</a></li>
                <li><a class="dropdown-item" href="../matricula/add_matricula.php">Registrar Matrícula</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../matricula/table_matricula.php">Matriculados</a></li>
                <li><a class="dropdown-item" href="../alumno/table_alumnos.php">Alumnos Registradoss</a></li>
                <li><a class="dropdown-item" href="../profesor/table_profesor.php">Porfesores registrados</a></li>
                <li><a class="dropdown-item" href="../curso/table_cursos.php">Cursos registrados</a></li>
             </ul>
            </div>
            <div class="row mt-2">
                <div>
                    <img src="./img/tec.avif" class="uno col-4">
                   
                </div>

            </div>
       </div>
    </div>
    <style>
        body {
            background-color: antiquewhite;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .container {
            background-color: aquamarine;
        }
        .uno {
            width: 100%;

        }
    </style>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>