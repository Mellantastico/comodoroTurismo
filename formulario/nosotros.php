<?php 
    //require_once('helpers/dd.php');
    require('controladores/funciones.php');
    //if(ingresarUsuario() === true){
        if (!isset($_SESSION['nombre'])) {
            $nombre = "";  
        } else{
            $nombre = $_SESSION['nombre'].' '.$_SESSION['apellido'];}

    $bd = conexion('localhost','comodoroturismo','root','');       
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Comodoro Rivadavia</title>
</head>

<body>
    <!-- PHP NAVEGADOR -->


    <?php require_once('Partials/navegador.php')?>



    <h1 class="text-primary mb-4 mx-auto text-center" id="app"></h1>

    <div class="container">
        <div class="row w-75 border border-info mx-auto my-5 shadow-lg p-3 mb-5 bg-body rounded destacados">
            <div class="col p-3 mx-auto">
                <img src="img/Eber.jpg" class="rounded" alt="aniversario" width="400" height="400">
            </div>
            <div class="col">
                <h3 class="fs-5 mt-4 px-4 pb-1">Eber <span class="text-primary">Unquen</span></h3>
                <p class="px-4 text-secondary">Programador web full stack</p>
                <p class="px-4">Correo: eberunquen.webdev@gmail.com</p>
                <p class="px-4">Github: https://github.com/EberUnquen</p>

            </div>
        </div>
        <div>
            <div class="row w-75 border border-info mx-auto my-5 shadow-lg p-3 mb-5 bg-body rounded destacados">
                <div class="col p-3 mx-auto">
                    <img src="img/agus.jpg" class="rounded" alt="aniversario" width="400" height="400">
                </div>
                <div class="col">
                    <h3 class="fs-5 mt-4 px-4 pb-1">Agustín <span class="text-primary">Mella</span></h3>
                    <p class="px-4 text-secondary">Programador web full stack</p>
                    <p class="px-4">Correo: agustingabrielmella@gmail.com</p>
                    <p class="px-4">Github: https://github.com/Mellantastico</p>
                </div>
            </div>
            <div>
                <div class="row w-75 border border-info mx-auto my-5 shadow-lg p-3 mb-5 bg-body rounded destacados">
                    <div class="col p-3 mx-auto">
                        <img src="img/axel.jpg" class="rounded" alt="aniversario" width="400" height="400">
                    </div>
                    <div class="col">
                        <h3 class="fs-5 mt-4 px-4 pb-1">Axel <span class="text-primary">Huichante</span></h3>
                        <p class="px-4 text-secondary">Programador web full stack</p>
                        <p class="px-4">Correo: ahuichante@gmail.com </p>
                        <p class="px-4">Github: https://github.com/ahuichante</p>
                    </div>
                </div>
                <!-- FOOTER -->



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous"></script>
                <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
                <script src="main.js"></script>



            </div>
        </div>
    </div>
    <footer class="w-100 bg-primary text-light  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Eber Unquen, Axel Huichante, Agustín Mella &copy; Todos Los Derechos
            Reservados 2022</p>
    </footer>
</body>

</html>