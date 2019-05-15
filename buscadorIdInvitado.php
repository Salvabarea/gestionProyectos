<form method="POST" action="perfilUsuarioInvitado.php">
	<div class="form-group">
		<label for="usuario"><b>Ver perfil del usuario:</b></label>
		<input type="text" class="form-control" id= "IdUsuario" name="IdUsuario" placeholder="Buscar por nombre">
		<br>
		<input type="submit" class="btn btn-success" value="Buscar" onKeyUp="buscar();">
	</div>
</form>