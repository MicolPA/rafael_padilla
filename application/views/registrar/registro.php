<div class="container">
	<div class="row mt-md-5">
		<div class="col-md-8 m-auto pl-md-0">
			<h2 class="font-weight-bold text-success m-0">Formulario de Registro</h2>
			<p class="h6 mb-4">Registra tus Sub Coordinadores</p>
		</div>
		<div class="col-md-8 m-auto bg-light pt-4 pb-4 rounded">

			<form method='post' id='formulario'>
				
				<div class="form-group">
					<label class="h5">Cédula del Sub Coordinador</label>
					<input type="text" class="form-control" name='cedula' id='cedula' required value="<?= isset($post['cedula'])?$post['cedula']:''; ?>">
				</div>

				<div class="form-group">
					<label class="h5">Célular</label>
					<input type="text" class="form-control" name='celular' id='celular' required value="<?= isset($post['celular'])?$post['celular']:''; ?>">
				</div>

				<div class="form-group">
					<label class="h5">Mesa Electoral</label>
					<input type="text" class="form-control" name='mesa' id='cedula' required value="<?= isset($post['mesa'])?$post['mesa']:''; ?>">
				</div>
				<div class="div_cargando text-center" style="display: none">
					<img src="<?= base_url('assets/images/loading-sm.gif') ?>" width='80px' style='margin-left: -4rem'>
					Registrando Sub Coordinador...
				</div>
				<div class="form-group mt-4 ">
					<input type="submit" value="Registrar Persona" class="btn btn-success btn-block btn-lg btn_submit">
				</div>

				<!-- <input type="hidden" class="form-control" name='nombre' id='nombre'> -->
				<!-- <input type="hidden" class="form-control" name='apellido' id='apellido'> -->


			</form>
		</div>
	</div>
</div>
