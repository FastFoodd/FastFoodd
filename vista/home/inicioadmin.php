<meta charset="UTF-8">
<?php include '../../modelo/sesiones/sesion.php'; ?>
<h1>HOLA 
    <?php
    echo $_SESSION['user'];
    ?>
    Esta pestaña esta en proceso por los desarrolladores, Gracias!
</h1>
<a href="../../modelo/sesiones/cerrarsesion.php">Cerrar Sesión</a>