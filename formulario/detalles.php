<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('controladores/funciones.php');

$id = intval($_GET['id']);
//dd($id);
$bd = conexion('localhost', 'comodoroTurismo', 'root', 'casa123');
$localidad = buscar1($bd, 'estadia', $id);
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/busqueda.css">

    <script>
        var txt = "   Detalles   ";
        var espera = 105;
        var refresco = null;

        function rotulo_title() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            refresco = setTimeout("rotulo_title()", espera);
        }
        rotulo_title();
    </script>

</head>

<body class="">
    <!-- PHP NAVEGADOR -->
    <?php require_once('Partials/navegador.php') ?>
    <h1 class="py-5 text-center bg-info text-white mb-0">Detalles del lugar</h1>
    <div class="container-fluid">
        <section class="bg-info opacity-75 rounded-1">
            <section class="row bg-light">
                <article class="col-12 align-middle" >
                    <div class="card my-4 shadow-lg p-3 bg-body rounded mx-auto w-100" style="background-image: url(img/<?= $localidad['imagen'] ?>)" id="test">
                        <!-- <img src="img/<?= $localidad['imagen'] ?>" class="card-img-top w-50 m-auto" alt="Perrita"> -->
                        <div class=" card-body text-center text-white align-middle m-2 badge text-wrap fw-normal">
                            <h2 class="card-title fs-1"><?= $localidad['nombre'] ?></h5>
                            <p class="fs-5 text-break card-text"><?= $localidad['descripcion'] ?></p>
                            <p class="fs-5 card-text mb-5">Email: <?= $localidad['email'] ?></p>
                            <a href="javascript: history.go(-1)" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </div>
                </article>
            </section>
        </section>
    </div>


    <footer class="w-100 bg-primary text-light  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Eber Unquen, Axel Huichante, Agustín Mella, Brisa Molina &copy; Todos Los Derechos Reservados 2022</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="scripts/main.js"></script> -->
</body>

</html>