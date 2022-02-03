<?php

session_start();
require 'database.php';
if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id' );
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;

    if(count($results)> 0){
        $user = $results;
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
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
<?php
require 'partials/navegador.php';
?>
    <h1>Iniciar Sesion</h1>
    <?php if (!empty($user)): ?>
    <br>Bienvenido <?= $user['email'] ?>
    <?php else: ?>
    <a href="cerrarsesion.php">Cerrar Sesion</a>
    <a href="iniciar.php">iniciar session</a> o 
    <a href="registro.php">Regístrate</a>
    <?php endif; ?>
</body>
</html>


