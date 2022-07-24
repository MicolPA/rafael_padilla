<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<h1 class="font-weight-bold display-6 text-success">Listado de Sub Coordinadores</h1>
		</div>

		<div class="col-md-12 mt-2">
			<p class="h6"><i class='fa fa-circle'  style='color:green;'></i>  Total Registrados: <?= $total ?></p>
		</div>
		
		<div class="col-md-12 mb-2 mt-4">
			<div class="table-responsive text-left">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cédula</th>
						<th>Célular</th>
						<th>Recinto</th>
						<!-- <th>Mesa</th> -->
					</tr>	
					</thead>
					

					<tbody>
						<?php foreach ($result as $r): ?>
						<tr>
							<td><?= $r->nombre ?></td>
							<td><?= $r->apellido ?></td>
							<td><?= $r->cedula ?></td>
							<td><?= $r->celular ?></td>
							<td><?= $r->recinto_nombre ?></td>
							<!-- <td><?//= $r->mesa ?></td> -->
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	setTimeout(function(){
		
	},1000)
</script>