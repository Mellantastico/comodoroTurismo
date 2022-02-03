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

      
        <?php require_once('Partials/navegador.php')?>
      

     <!-- CARRUSEL -->    
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval= "3000">
      <img src="img/lucania-dormitorio.jpg" class="d-block w-100" alt="hoteles">
      <div class="carousel-caption d-none d-md-block">
        <h2>Hotel</h2>
        <p>Encuentra tu hotel ideal para tener una estadia cómoda.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval= "3000">
      <img src="img/cayo-coco-rest.jpg" class="d-block w-100" alt="restaurantes">
      <div class="carousel-caption d-none d-md-block">
        <h2>Restaurante</h2>
        <p>Conoce los diferentes restaurantes de la ciudad.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval= "3000">
      <img src="img/feria-libro-comodoro.jpg" class="d-block w-100" alt="eventos">
      <div class="carousel-caption d-none d-md-block">
        <h2>Eventos</h2>
        <p>Descubre los próximos eventos locales.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- Introduccion --> 
<section class="w-50 mx-auto text-center pt-5" id="intro">
    <h1 class="p-3 fs-2 border-top border-3">Disfruta del turismo en<span class="text-primary"> Comodoro Rivadavia</span></h1>
    <p class="p-3 fs-4"><span class="text-primary">Quedate</span> en la ciudad y disfruta de sus atractivos turisticos, tales como
  eventos publicos, restaurantes con gran variedad de comidas, hoteles con una gran vista, y las grandes playas.</p>
</section>
    <!-- Servicios -->

<section class="container-fluid">
<div class="container">
  <div class="row w-75 mx-auto my-5 destacados">
    <div class="col border p-3 mx-auto">
      <img src="img/aniversario.jpg" class="rounded" alt="aniversario" width="360" height="320">
      <div>
        <h3 class="fs-5 mt-4 px-4 pb-1">Aniversario</h3>
        <p class="px-4">Veni a celebrar el aniversario de la ciudad</p>
      </div>
    </div>
    <div class="col border p-3 mx-auto">
      <img src="img/paintball.jpg" class="rounded" alt="paintball" width="360" height="320">
      <div>
        <h3 class="fs-5 mt-4 px-4 pb-1">Paintball</h3>
        <p class="px-4">Participa en el paintball de Comodoro</p>
      </div>
    </div>
    
  </div>
  <div class="row w-75 mx-auto my-5 destacados">
    <div class="col border p-3 mx-auto">
      <img src="img/carnaval.jpg" class="rounded" alt="carnaval" width="360" height="320">
      <div>
        <h3 class="fs-5 mt-4 px-4 pb-1">Carnavales</h3>
        <p class="px-4">Disfruta de los carnavales en el centro de la ciudad</p>
      </div>
    </div>
    <div class="col border p-3 mx-auto">
      <img src="img/chenque.jpg" class="rounded" alt="chenque" width="360" height="320">
      <div>
        <h3 class="fs-5 mt-4 px-4 pb-1">Chenque</h3>
        <p class="px-4">Da un paseo tranquilo por la hermosa ciudad de Comodoro Rivadavia</p>
      </div>
    </div>
    
  </div>
</div>
</section>  
<footer class="w-100 bg-primary text-light  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">Eber Unquen, Axel Huichante, Agustín Mella, Brisa Molina &copy; Todos Los Derechos Reservados 2022</p>
</footer>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

