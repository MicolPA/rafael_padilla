<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			<h2 class="font-weight-bold display-5 text-success mt-4">Editar Sub Coordinador <a href="javascript:eliminarSub(<?= $info->id ?>)" class="float-right btn btn-sm btn-danger mt-3">Eliminar Sub Coordinador</a></h2>
			<!-- <p class="font-weight-bold mb-4 h5"><?//= $user_info->nombre . " " . $user_info->apellido ?></p> -->
		</div>

		<div class="col-md-8 m-auto">
			<form method='post'>
				<div class="form-group">
					<label class="font-weight-bold">Cédula</label>
					<input type="text" class="form-control" value="<?= $info->cedula ?>" readonly>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Nombre</label>
					<input type="text" class="form-control" value="<?= $info->nombre . ' ' . $info->apellido ?>" readonly>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Mesa</label>
					<input type="text" class="form-control" name='mesa' value="<?= $info->mesa ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Célular</label>
					<input type="text" class="form-control" id='celular' name='celular' value="<?= $info->celular ?>">
				</div>
				<div class="form-group">
					<input type="submit" value="Guardar Cambios" class="btn btn-success btn-block btn-lg">
				</div>
			</form>
		</div>
	</div>
</div>