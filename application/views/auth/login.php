<div class="container mt-5">
	<div class="row">
		<div class="pt-2 rounded col-md-6 bg-default m-auto bg-light text-center p-5">
			<form method="post">
				<img src="<?= base_url('assets/images/user.png') ?>" class='mt-4 mb-2' width='80px'>
				<h2 class="mb-3 mt-3">Iniciar sesión</h2>

				<div class="form-group">
					<input type="text" name="cedula" class="form-control text-center" placeholder="Usuario">
				</div>

				<div class="form-group">
					<input type="password" name="clave" class="form-control text-center" placeholder="Contraseña">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-success btn-block" value="Iniciar sesión">
				</div>
			</form>
		</div>
	</div>
</div>