<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('controladores/funciones.php');
//dd($_POST['localidad']);


if (isset($_POST['enviar'])) {
  if (!empty($_POST['localidad']) || !empty($_POST['tipo'])) {
    //crea variables vacias segun se precisen
    for ($x = 1; $x < 3; $x++) {
      ${"dato" . $x} = "";
    }
    for ($x = 1; $x < 6; $x++) {
      ${"tipo" . $x} = "";
    }
    //codigo si selecciona alguna opcion
    if (isset($_POST['localidad'])) {
      $selectLocalidad = ($_POST['localidad']);
      $i = 1;
      $j = 0;
      if (isset($_POST['localidad'])) {
        foreach ($selectLocalidad as $seleccion) {
          ${'dato' . $i++} = $selectLocalidad[$j++];
        }
      }
    }
    if (isset($_POST['tipo'])) {
      $selectTipo = ($_POST['tipo']);
      $i = 1;
      $j = 0;
      if (isset($_POST['tipo'])) {
        foreach ($selectTipo as $tipo) {
          ${'tipo' . $i++} = $selectTipo[$j++];
        }
      }
    }

    //conexion a BD
    $bd = conexion('localhost', 'comodoroTurismo', 'root', '');
    //Busqueda segun datos
    $localidad = buscar($bd, 'ocio', 'localidad', $dato1, $dato2, 'tipo', $tipo1, $tipo2, $tipo3, $tipo4, $tipo5);
    //dd($localidad);
  } elseif (!isset($_POST['localidad'])) {
    //echo "Ninguna seleccion";
  }
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

  <script>
    var txt = "   Ocio y Entretenimiento   ";
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

<body>
  <!-- PHP NAVEGADOR -->


  <?php require_once('Partials/navegador.php') ?>
  <!--Test de script-->
  <section class="py-5 bg-info opacity-75 rounded-1">
    <div class="py-lg-5 bg-info ">
      <div class="col-lg-6 col-md-8 mx-auto bg-light border border-light rounded shadow p-3 mb-5 bg-body shadow-lg p-3 mb-5 bg-body rounded">
        <h1 class="fw-light text-center m-5">Ocio y Entretenimiento</h1>
        <form action="ocio.php" method="POST" class="container row justify-content-around col-md-8 offset-md-2 mx-auto">
          <div class="col-6 mx-auto">
            <label class="heading ">Selección por Ciudad:</label>
            <div class="checkbox">
              <label><input type="checkbox" name="localidad[]" value="Comodoro Rivadavia"> Comodoro Rivadavia</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="localidad[]" value="Rada Tilly"> Rada Tilly</label>
            </div>
          </div>
          <div class="col-6">
            <label class="heading">Selección por tipo:</label>
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="Boliche"> Boliches</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="Parque"> Parques</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="SkatePark"> Skate Park</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="Playa"> Playas</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="Restaurante"> Restaurantes</label>
            </div>
          </div>
          <div class="row text-center m-3">
            <div class="col-md-8 offset-md-2">
              <input type="submit" value="Consulta" name="enviar" class="btn btn-outline-primary">
            </div>
          </div>
        </form>

      </div>
  </section>

  <div class="py-3 bg-info opacity-75">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php if (isset($localidad)) foreach ($localidad as $key => $local) : ?>
          <div class="col mx-auto">
            <div class="col">
              <img src="img/<?= $local['imagen'] ?>" class="card-img-top" alt="...">
              <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                  <p class="card-text"><?= $local['localidad'] ?></p>
                  <p class="card-text"><?= $local['tipo'] ?></p>
                </div>
                <a href="detalles.php?id=<?= $local['id']; ?>" class="btn btn-primary">Más info</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  </div>

  <footer class="w-100 bg-primary text-light  d-flex  align-items-center justify-content-center flex-wrap">
    <p class="fs-5 px-3  pt-3">Eber Unquen, Axel Huichante, Agustín Mella, Brisa Molina &copy; Todos Los Derechos Reservados 2022</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
