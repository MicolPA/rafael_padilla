<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
			<h2 class="text-success">Listado de Sub Coordinadores</h2>
		</div>

		<div class="col-md-12 mt-2">
			<p class="h4"><i class='fa fa-circle'  style='color:green;'></i>  Total Registrados: <?= $total ?></p>
		</div>

		<div class="col-md-12 mb-2">
			<div class="table-responsive">
				<?= $grid_html ?>
			</div>
		</div>
	</div>
</div>