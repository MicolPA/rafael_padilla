<?php $post = $_POST; ?>
<div class="container">
	<div class="row align-items-center" style="background: #fafafa">
		<div class="col-md-4 hidden_cell pr-4 text-white text-center">
			<img src="<?= base_url('assets/images/user.png') ?>" width='80%'>
		</div>
		<div class="col-md-8 bg-white">
			<form method="post" class="mt-4 pl-3">
				<h2 class="text-success font-weight-bold display-5">Regístrate</h2>
				<p class="text-success h4">Como Coordinador de tu localidad.</p>
				<div class="row">
					<div class="form-group col-md-12">
						<label>Cédula</label>
						<input type="text" class="form-control" id="cedula" name="cedula" required value="<?= isset($post['cedula'])?$post['cedula']:''; ?>">
					</div>
					<div class="form-group col-md-6">
						<label>Célular</label>
						<input type="text" class="form-control" name="celular" id="celular" required value="<?= isset($post['celular'])?$post['celular']:''; ?>">
					</div>
					<div class="form-group col-md-6">
						<label>Correo</label>
						<input type="email" name='correo' class="form-control" required value="<?= isset($post['correo'])?$post['correo']:''; ?>">
					</div>
					<div class="form-group col-md-12">
						<label>Contraseña</label>
						<input type="password" name='clave' class="form-control" id="clave1" required min='6'>
					</div>
					<div class="form-group col-md-12">
						<label>Confirmar contraseña</label>
						<input type="password" class="form-control" id="clave2" required min='6'>
						<p class="text-danger font-weight-bold mt-2" id="pass_alert" style="display: none">Las contraseñas deben coincidir.</p>
					</div>
					<div class=" col-md-12">
						<p>¿Ya tienes una cuenta? <a href="/auth/login">Inicia sesión aquí.</a></p>
					</div>
					<div class="form-group col-md-12 mt-2">
						<input type="submit" value="Regístrate" class="btn btn-success btn-block btn-register">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



