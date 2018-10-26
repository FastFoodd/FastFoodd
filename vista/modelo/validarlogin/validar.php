<?php
include '../../controlador/validardatoslogin/validar.php';
    $user=$_POST["usuario"];
    $pass=$_POST["contra"];
if(
    $user!="" && $pass!=""
){
$usuarios= new validar;
$usuarios->validaruser($user,$pass);
}
else{
    header('Location: ../../index2.php');
}
?>