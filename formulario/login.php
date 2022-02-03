<?php
    session_start();

    if(isset($_SESSION['users_id'])){
      header('index.php');
    }

    require('database.php');
    if (!empty($_POST['email']) && !empty($_POST['password'])){
      $records = $conn->prepare('SELECT id, email, password, FROMO usuarios WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message= '';
    if(count($results)> 0 && password_verify($_POST['password'], $results['password'])){
      $_SESSION['user_id'] = $results['id'];
      header('index.php');
    } else {
      $message = 'correo o contraseña inconrrecta';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
<body>
    <?php require_once('Partials/navegador.php')?>
    <div class="a">
      <h1>Iniciar Sesion</h1>
      <span>o <a href="registro.php">Regístrate</a></span>
    </div>  
    <form action="iniciar.php" method="POST">
      <input type="text" class="email" name="email" placeholder="ingrese email">
      <input type="password" class="password" name="password" placeholder="contraseña">
      <input type="submit" class="enviar" value="enviar">
    </form>
</body>
</html>