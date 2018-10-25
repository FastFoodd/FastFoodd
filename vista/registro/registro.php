<script src="./js/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../estilos/registro.css">

<div class="modal" id="registro" role="dialog" 
aria-labellebdy="myModalLabel" aria-hidden="true">
<div class="modal-dialog ">
<div class="modal-content" style=background:#bdecb6>
<div class="modal-header">
<h4>Nuevo Usuario</h4>
<button type="button" class="close" data-dismiss="modal"
 aria-hidden="true">&times;</button>
</div>

<div class="modal-body">
<div class="form-group">
<form action="modelo/registro/registro.php" method="POST">
<label for="username">Usuario</label>
<input type="text" class="form-control" 
style=text-align:center
name="username" id="username" 
placeholder="Usuario" autofocus required><br>

<label for="pass">Contraseña</label><br>
<input type="password" class="form-control" name="passw" id="passw"
placeholder="********" required style=text-align:center>

<label for="email">E-mail</label><br>
<input type="email" class="form-control" placeholder="ejemplo@outlook.com" name="email"
 id="email" required style=text-align:center>
 <br>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>
</div>
