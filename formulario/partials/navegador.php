<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">

        <a class="navbar-brand text-light" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ¿Que buscas?
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="estadia.php">Estadia</a></li>
                        <li><a class="dropdown-item" href="ocio.php">Ocio / Entretenimiento</a></li>
                        <li><a class="dropdown-item" href="comercio.php">Comercios / Bancos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="servicios.php">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="nosotros.php">Sobre Nosotros</a>
                </li>

                <?php  if(isset($_SESSION['nombre'])) : ?>
                <?php if(intval($_SESSION['perfil']) === 9) : ?>
                <li class="nav-item">
                    <a class="nav-link text-light" href="administrar.php">Administrar</a>
                </li>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
            <?php if(!isset($_SESSION['nombre'])) :?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="login.php">Iniciar sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="registro.php">Registrarme</a>
                </li>
            </ul>
            <?php else :?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img style="width: 50px; border-radius:50%" src="imagenes/<?= $_SESSION['avatar'];?>" alt="Avatar">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="logout.php">Salir</a>
                </li>
            </ul>
            <?php endif; ?>
            <!--  
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Buscar...</button>
            </form>
            </div>
            </div>
            -->
</nav>