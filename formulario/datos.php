<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('controladores/funciones.php');

//dd($_FILES);
//$imagen = $_FILES['imagen'];
//dd($imagen);

//dd($_POST['submit']);
if (isset($_POST['submit'])) {
    //dd($_FILES);
    $datos = armarDatos($_POST);
    $imagen = imagenBD($_FILES);
    $bd = conexion('localhost', 'comodoroTurismo', 'root', 'casa123');
    //dd($datos);
}



?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Comodoro Rivadavia</title>
</head>

<body>
    <!-- PHP NAVEGADOR -->


    <?php require_once('Partials/navegador.php') ?>

    <div class="container">
        <h1>Para subir registros</h1>
        <form class="row g-3 needs-validation" method="POST" action="datos.php" novalidate enctype='multipart/form-data'>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="nombre">
                <label for="validationCustom01" class="form-label">Localidad</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="localidad">
                <label for="validationCustom01" class="form-label">Ubicación</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="ubicacion">
                <label for="validationCustom01" class="form-label">Número</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="numero">
                <label for="validationCustom01" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="email">
                <label for="validationCustom01" class="form-label">Página Web</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="paginaWeb">
                <label for="validationCustom01" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="descripcion">
                <label for="validationCustom01" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="validationCustom01" value="" required name="imagen">
                <label for="validationCustom01" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="tipo">

                <div class="col-md-3 position-relative">
                    <label for="validationTooltip04" class="form-label">Tabla</label>
                    <select class="form-select" id="validationTooltip04" required name="tabla">
                        <option selected disabled value="">Tabla...</option>
                        <option>Comercio</option>
                        <option>Estadia</option>
                        <option>Ocio</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit">Enviar</button>
            </div>
        </form>
    </div>

    <footer class="w-100 bg-primary text-light  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Eber Unquen, Axel Huichante, Agustín Mella, Brisa Molina &copy; Todos Los Derechos Reservados 2022</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>