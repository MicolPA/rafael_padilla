<?php  
	
	$get = $_GET;
	$circ = isset($get['circ'])?$get['circ']:'';
	$municipio = isset($get['municipio'])?$get['municipio']:'';
	$mesa = isset($get['mesa'])?$get['mesa']:'';
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<?php if (isset($user_info)): ?>
			<h2 class="font-weight-bold display-5 text-success">Listado de Sub coordinadores</h2>	
			<p class="font-weight-bold mb-4 h5"><?= $user_info->nombre . " " . $user_info->apellido ?></p>
			<?php else: ?>
			<h2 class="font-weight-bold display-5 text-success"><?= isset($admin)?'Listado de Coordinadores':'Listado Sub Coordinadores Total' ?></h2>	
			<?php endif ?>
		</div>

		<div class="col-md-12 mt-2">
			<p class="h6"><i class='fa fa-circle'  style='color:green;'></i>  Total <?= isset($admin)?"Coordinadores":"Sub Coordinadores" ?>: <?= number_format($total) ?></p>
		</div>

		<form class="w-100 mt-3">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-3">
					<label>Municipio</label>
					<select name="municipio" id="" class="form-control" >
						<option value="">Todos</option>
						<option value="223" <?= $municipio=='223'?'selected':'' ?>>Santo Domingo Este</option>
						<option value="226" <?= $municipio=='226'?'selected':'' ?>>Boca Chica</option>
						<option value="286" <?= $municipio=='286'?'selected':'' ?>>La Caleta</option>
						<option value="291" <?= $municipio=='291'?'selected':'' ?>>San Luis</option>
						<option value="227" <?= $municipio=='227'?'selected':'' ?>>San Antonio de Guerra</option>
					</select>
				</div>

				<div class="col-md-2">
					<label>Circunscripción</label>
					<select name="circ" id="" class="form-control">
						<option value="">Todas</option>
						<option value="1" <?= $circ=='1'?'selected':'' ?>>01</option>
						<option value="2" <?= $circ=='2'?'selected':'' ?>>02</option>
						<option value="3" <?= $circ=='3'?'selected':'' ?>>03</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>Mesa</label>
					<input type="text" name="mesa" class="form-control" value="<?= $mesa ?>">
				</div>
				<div class="col-md-2 pt-4">
					<input type="submit" value="Búscar" class="btn btn-primary mt-1 btn-block">
				</div>
				</div>
			</div>
		</form>

		<div class="col-md-12 mb-2 mt-4">
			<div class="table-responsive text-left">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cédula</th>
						<th>Célular</th>
						<th class="hide_cel">Municipio</th>
						<th class="hide_cel">Circ.</th>
						<th>Recinto</th>
						<!-- <th>Mesa</th> -->
						<?php if (isset($admin)): ?>
						<th>Registrados</th>
						<th> - </th>
						<?php else: ?>
						<?php if (!isset($user_info)): ?>
						<th>Coordinador</th>		
						<th> - </th>		
						<?php endif ?>
						<?php endif ?>
					</tr>	
					</thead>
					

					<tbody>
						<?php foreach ($result as $r): ?>
						<tr>
							<td><?= $r->nombre ?></td>
							<td><?= $r->apellido ?></td>
							<td><?= $r->cedula ?></td>
							<td><?= $r->celular ?></td>
							<td class="hide_cel"><?= $r->municipio_nombre ?></td>
							<td class="hide_cel"><?= $r->circunscripcion ?></td>
							<td><?= $r->recinto_nombre ?></td>
							<!-- <td><?//= $r->mesa ?></td> -->
							<!-- Coordinadores -->
							<?php if (isset($admin)): ?>
							<?php 
								$query = $this->db->query("SELECT * FROM user where username = $r->cedula");
								if ($query->result()) {
									$user = $query->first_row();

									$query = $this->db->query("SELECT * FROM sub_coordinadores where user_id = $user->id");
									$total = $query->result();
									$total = count($total); 
								}
								
							?>
							<td><a href="<?= base_url('registrar/subcoordinadores') ?>?id=<?= $user->id ?>" class="link-no text-dark font-weight-bold"><?= $total ?></a></td>
							<td><a href="<?= base_url('auth/usuario') ?>?cedula=<?= $user->username ?>" class="no-link">Editar</a></td>	
							<?php else: ?>
							<!-- Subcoordinadores -->
							<?php if (!isset($user_info)): ?>
							<?php 
								$query = $this->db->query("SELECT * FROM user where id = $r->user_id");?>
							<?php if ($query->result()): ?>
							<?php $user = $query->first_row() ?>
							<td><?= $user?"$user->nombre $user->apellido" :'';?></td>	
							<!-- User Exist If -->
							<?php else: ?>
							<td></td>
							<?php endif ?>

							<td><a href="<?= base_url('registrar/editar_sub') ?>?cedula=<?= $r->cedula ?>" class="no-link">Editar</a></td>	

							<!-- Admin Isset If -->
							<?php endif ?>

							<!-- Main If -->
							<?php endif ?>
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