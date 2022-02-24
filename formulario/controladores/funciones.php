<?php
session_start();
require_once 'helpers/dd.php';

function validarUsuarioRegistro($datos){
    $errores =[];
    if (trim($datos['nombre']) === '') {
        $errores['nombre']  = "El campo nombre no puede estar vacio";
    }
    if (empty(trim($datos['apellido']))) {
        $errores['apellido']  = "El campo apellido no puede estar vacio";
    }
    if (trim($datos['email']) === '') {
        $errores['email']  = "El campo email no puede estar vacio";
    }
    if (trim($datos['password']) === '') {
        $errores['password']  = "El campo clave no puede estar vacio";
    }else if (strlen(trim($datos['password']))<6) {
        $errores['password']  = "El campo clave no puede tener menos de 6 caracteres";
    }
    if (trim($datos['confirm_password']) === '') {
        $errores['confirm_password']  = "El campo de rectificación no puede estar vacio";
    }else if (strlen(trim($datos['confirm_password'])) < 6) {
        $errores['confirm_password'] = "El campo de rectificación no puede tener menos de 6 caracteres";
    }
    if (trim($datos['password']) != trim($datos['confirm_password'])) {
        $errores['confirm_password']  = "El campo de rectificacion no es igual al campo clave";
    }
    //validar fecha de nacimiento//
    if(isset($imagen)){
        $avatar = $imagen['avatar']['name'];
        $ext = pathinfo($avatar,PATHINFO_EXTENSION);
        if($imagen['avatar']['error'] !=0){
            $errores['avatar'] = "Debe subir su avatar";
        }elseif($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png'){
            $errores['avatar'] = "Debe seleccionar un archivo de tipo JPG ó PNG ó JPEG";
        }

    }

    return $errores;
}


//----------------------- UPDATE----------------------- //

function armarUsuario($datos){
    $usuario = [
        "nombre" => $datos['nombre'],
        "apellido" => $datos['apellido'],
        "email" => $datos['email'],
        "password" => $datos['password'],
        "fechaNacimiento" => $datos['fechaNacimiento'],
        "perfil" => 1
    ];
    return $usuario;
}
//----------------axel ---------------
function armarDatos($datos)
{
    //dd($datos);
    $carga = [
        "nombre" => $datos['nombre'],
        "localidad" => $datos['localidad'],
        "ubicacion" => $datos['ubicacion'],
        "numero" => $datos['numero'],
        "email" => $datos['email'],
        "paginaWeb" => $datos['paginaWeb'],
        "descripcion" => $datos['descripcion'],
        "tipo" => $datos['tipo'],
        "tabla" => $datos['tabla']
    ];
    //dd($carga);
    return $carga;
}

function imagenBD($imagen)
{
    dd($imagen);
    $avatar = $imagen['imagen']['name'];
    dd($avatar);
    $ext = pathinfo($avatar, PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['imagen']['tmp_name'];
    $archivoDestino = dirname(__DIR__) . '/img/';
    $avatar = uniqid('img-') . '.' . $ext;
    //dd($avatar);
    $archivoDestino = $archivoDestino . $avatar;
    //Voy a guardar en el servidor la imagen o el archivo
    move_uploaded_file($archivoOrigen, $archivoDestino);
    //dd($avatar);
    return $avatar;
}

//------------------------------------------------

function armarImagen($imagen){
    $avatar = $imagen['avatar']['name'];
    $ext = pathinfo($avatar,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    $archivoDestino = dirname(__DIR__).'../imagenes/';
    $avatar = uniqid('avatar-').'.'.$ext;
    $archivoDestino = $archivoDestino.$avatar;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    return $avatar;
}   

$server= 'localhost';
$username='root';
$password ='';
$dbname = 'comodoroturismo';
function conexion($server,$dbname,$username,$password){
    try{
        $dsn = "mysql:host=$server;dbname=$dbname";
        $bd = new PDO($dsn, $username, $password);
        return $bd;
    }catch(PDOException $error){
        echo "<h2 style='color:white; text-align:center; background-color:tomato; padding:20px'> Upps ! Ocurrio un error " . $error->getMessage() ."</h2>";
        exit;
    }
    
}

//Crear función para guardar los datos en la Base de Datos
function guardarUsuarioBD($bd,$tabla,$datos,$imagen){
    //1.- Organizar los datos a guardar
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $email = $datos['email'];
    $password = password_hash($datos['password'],PASSWORD_DEFAULT) ;
    $perfil = 1; 
    $fechaNacimiento =  $datos['fechaNacimiento'];
    $avatar = $imagen;   
    //2.- Armar la consulta
    //                            Nombres de los campos en la tabla
    $sql = "insert into $tabla (nombre,apellido,email,password,perfil,avatar,fechaNacimiento) values (:nombre,:apellido,:email,:password,:perfil,:avatar,:fechaNacimiento)";
    //3.- Preparar la consulta
    $query = $bd->prepare($sql);
    //4.- Continuo con la preparación de la consulta de manera blindada
    $query->bindValue(':nombre', $nombre);
    $query->bindValue(':apellido', $apellido);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);
    $query->bindValue(':perfil', $perfil);
    $query->bindValue(':avatar',$avatar);
    $query->bindValue(':fechaNacimiento',$fechaNacimiento);
    //5.- Ejecutar la consulta
    $query->execute();
} 
//Función para Listar los usuarios registrados en la tabla ( usuarios ) de la Base de datos

function listar($bd,$tabla){ 
    //1.- Armar la consulta
    $sql = "select * from  $tabla";
    //2.- Preparar la consulta
    $query = $bd->prepare($sql);
    //3.- Ejecutar la consulta
    $query->execute();
    //4.- Traer los datos de la consulta
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    //dd($usuarios);
    return $resultados;
}
//-------------MAÑANA ARMAR EL LOGIN ---------//
function validarUsuarioLogin($datos){
    $errores =[];
    if (trim($datos['email']) === '') {
        $errores['email']  = "El campo email no puede estar vacio";
    }
    if (trim($datos['password']) === '') {
        $errores['password']  = "El campo clave no puede estar vacio";
    }else if (strlen(trim($datos['password']))<6) {
        $errores['password']  = "El campo clave no puede tener menos de 6 caracteres";
    }

    return $errores;
}
//------------- busqueada--------------------------
//axel--------------------
function buscar($bd, $tabla, $dato, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8)
{
    //dd($_GET);
    //1.- Armar la consulta
    if ($dato4 == "") {
        $sql = "SELECT * FROM `$tabla` WHERE `$dato` IN ('$dato1','$dato2')";
    } elseif($dato1 == "") {
        $sql = "SELECT * FROM `$tabla` WHERE `$dato3` IN ('$dato4','$dato5', '$dato6', '$dato7', '$dato8') ORDER BY `id` ASC";
    } else {
        $sql = "SELECT * FROM `$tabla` WHERE `$dato` IN ('$dato1','$dato2') AND `$dato3` IN ('$dato4','$dato5', '$dato6', '$dato7', '$dato8') ORDER BY `id` ASC";
    }

    $query = $bd->prepare($sql);
    //3.- Ejecutar la consulta
    $query->execute();
    //4.- Traer los datos de la consulta
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function buscar1($bd,$tabla,$dato){
    //dd($_GET);
    //1.- Armar la consulta
    
    if($_POST){
        $sql = "select * from $tabla where email = '$dato'";    
    }else{
        $sql = "select * from $tabla where id = $dato";
    }
    
    //2.- Preparar la consulta
    $query = $bd->prepare($sql);
    //3.- Ejecutar la consulta
    $query->execute();
    //4.- Traer los datos de la consulta
    $resultato = $query->fetch(PDO::FETCH_ASSOC);
    //dd($usuario);
    return $resultato;
}

//----------------------------
//Buscamos por email al usuario que se está logueando
function buscarU($bd,$tabla,$dato){
    //dd($_GET);
    //1.- Armar la consulta
    
    if($_POST){
        $sql = "select * from $tabla where email = '$dato'";    
    }else{
        $sql = "select * from $tabla where id = $dato";
    }
    
    //2.- Preparar la consulta
    $query = $bd->prepare($sql);
    //3.- Ejecutar la consulta
    $query->execute();
    //4.- Traer los datos de la consulta
    $resultato = $query->fetch(PDO::FETCH_ASSOC);
    //dd($usuario);
    return $resultato;
}
//Función para setear el usuario (Session - Cookies)
function seteoUsuario($usuario,$datos){
    //dd($datos);
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['apellido'] = $usuario['apellido'];
    $_SESSION['perfil'] = $usuario['perfil'];
    $_SESSION['avatar'] = $usuario['avatar'];
    if(isset($datos['recordarme'])){
        //dd('El usuario pidio que lo redordaramos en su navegador');
        // Tiempo de la cookie a razon de 10 años 60*60*24*365*10
        setcookie('email',$datos['email'], time()+ 3600);
        setcookie('password',$datos['password'], time() + 3600);
        setcookie('nombre',$usuario['nombre'], time() + 3600);
        setcookie('apellido',$usuario['apellido'], time() + 3600);
        setcookie('perfil',$usuario['perfil'], time() + 3600);
        setcookie('avatar',$usuario['avatar'], time() + 3600);
    }
    //dd('No hay cookies');
}

//Función encgada de determin el ingreso o no al usuario

function ingresarUsuario(){
    if(isset($_SESSION['email'])){
        return true;
    }else{
        if(isset($_COOKIE['email'])){
            $_SESSION['email'] = $_COOKIE['email'];
            $_SESSION['password'] = $_COOKIE['password'];
            $_SESSION['nombre'] = $_COOKIE['nombre'];
            $_SESSION['apellido'] = $_COOKIE['apellido'];
            $_SESSION['perfil'] = $_COOKIE['perfil'];
            $_SESSION['avatar'] = $_COOKIE['avatar'];
            return true;
        }
        return false;
    }
}
