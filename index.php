<meta charset="UTF-8">
<?php
require 'vista/registro/registro.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="stylesheet" href="fonts.css">

    <title>FastFood</title>
</head>

<body>
   <div class="container">
   <header>
        <h1 class="title">FastFood</h1>
        <footer id="reg"><a href="" data-toggle="modal" data-target="#registro" id="regi">
    Registrate..
    </a></footer>
      </header>
    <div id="login">
    <form action="modelo/validarlogin/validar.php" method="POST">
    
    <article class="fondo">
          <img src="img/men.jpg" alt="User">
          <h1 id="title">Inicio de Sesión</h1><br>
          <form class="" action="index.html" method="post">
            <span class="icon-user"></span><input type="text" class="form-control" name="usuario" id="usuario"
    placeholder="Nombre de Usuario" autofocus required ><br>
            <span class="icon-key"></span><input type="password" class="form-control" name="contra" 
    id="contra" placeholder="Ingresar Contraseña" required ><br>
            <a href="" class="he">He olvidado mi contraseña</a>
            <input class="boton" type="submit" name="inicio" id="iniciar" value="Iniciar Sesion">
            </article>
          </form>
      </div>

    </div> 
</body>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="Bootstrap/js/bootstrap.min.js">
</html>