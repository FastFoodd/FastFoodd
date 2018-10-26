<?php
include '../../controlador/registro/registraruser.php';

$username=$_POST["username"];
$pass=$_POST["passw"];
$email=$_POST["email"];


if(isset($username) && isset($pass) && isset($email)){
    $registrar=new registraruser;
    $registrar=$registrar->registrar_user($username,$pass,$email);
    ?> <label for="EXIT">Se Ha registrado Correctamente</label>
    <a href="../../index.php">Iniciar Sesión</a> 
    <?php
}
else{
    ?> <label for="EXIT">Se ha producido un error inesperado :(</label>
    <a href="../../index.php">Regresar</a> 
    <?php
}
?>