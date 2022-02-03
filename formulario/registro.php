<?php require 'database.php';
$message='';
if(!empty($_POST['email']) && !empty($_POST['password'])){
  $sql = "INSERT INTO usuarios(email, password) VALUES(:email, :password) ";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email',$_POST['email']);
  $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
}/*
if($stmt->execute()){
  $message= 'Se ha registrado con exito';
} */
else {
  $message= 'a ocurrido un error creando su contraseña';
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
</head>
<body>
    <?php require 'partials/navegador.php';?>
  <div class="a">
    <h1>Regístrate</h1>  
    <span>o <a href="login.php">Iniciar Sesion</a></span>
  </div>
  <form action="registro.php" method="POST">
    <input type="text" class="nombre" name="nombre" placeholder="nombre">
    <input type="text" class="apellido" name="apellido" placeholder="apellido">
    <input type="text" class="email" name="email" placeholder="ingrese email">
    <input type="password" class="password" name="password" placeholder="contraseña">
    <input type="password" class="password" name="confirm_password" placeholder="confirmar contraseña">
    <input  class="control" type="file" name="avatar">
    <input type="date" class="fechaNacimiento" name="fechaNacimiento" id="fechaNacimiento">
    <label for="Enviar"></label>
    <input type="submit" id="enviar" class="enviar">
  </form>

  <?php if(!empty($message));?>
    <p><?php $message?></p> 
</body>
</html>