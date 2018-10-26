<meta charset="UTF-8">
<?php
include ("vista/registro/registro.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GDPS</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/fonts.css">
      </head>
  <body>
      <header>
        <h1 class="title">FastFood</h1>
        <a data-toggle="modal" href="#registro">Registrate..</a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="img/usuario.png" alt="User">
          <h3>Inicio de Sesión</h3>
          <form class="" action="index.html" method="post">
            <span class="icon-user"></span><input class="inp" type="text" name="user" value=""><br>
            <span class="icon-key"></span><input class="inp" type="password" name="pass" value=""><br>
            <a href="" class="he"> ¿Haz Olvidado Tu Contraseña?</a>
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
          </form>
        </article>
    </div>
  </body>
</html>

