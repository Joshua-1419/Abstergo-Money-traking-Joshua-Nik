 <center>
<font color="Turquoise"><h2>Inicio de sesion</h2>
</center>
<div class="row">
	<div class="col-md-12">
		<form action="<?php echo APP_URL; ?>users/login" method="POST">
			<div class="form-group">
		    	<label for="exampleInputEmail1">Usuario:</label>
		    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Inserte Usuario" name="username">
		  	</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Contraseña:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserte Contraseña" name="password">
			</div>
		  	<div class="checkbox">
			<center>
			    <label>
			      <input type="checkbox"> Recordar contraseña
			    </label> 	
		  	</div>
			<center>
		  	<button type="entrar" class="btn btn-default">Entrar</button>
			<hr />
			</center>
		</form>
	</div>
</div>