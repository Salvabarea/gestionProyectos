<form method="POST" action="perfilUsuario.php">
	<div class="form-group">
		<label for="usuario"><b>Ver perfil del usuario:</b></label>
		<input type="text" class="form-control" id= "IdUsuario" name="IdUsuario" placeholder="Buscar por ID">
		<br>
		<input type="submit" class="btn btn-success" value="Buscar" onKeyUp="buscar();">
	</div>
</form>