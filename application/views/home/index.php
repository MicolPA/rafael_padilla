<style>
	@media (max-width: 992px){
      	.hide_cel{
		display: none;
		} 

    }
	
</style>
<div class="container">
	<div class="row align-items-center pb-2 mt-4">
		<div class="col-sm-12 d-md-none d-lg-none pt-md-4 pt-sm-0 div_texto_inicio">
			<h1 class="text-success font-weight-bold h4">Rafael Padilla (ADI)</h1>
			<p class="">Movimiento Acción Dominicana Inmediata.</p>
			<?php if (!$_SESSION['user']): ?>
  			<a class="btn btn-success btn-lg" href="<?php echo base_url('/auth/registro') ?>">¡Registra a tu gente!</a>
  			<?php else: ?>
  			<a class="btn btn-success btn-lg" href="<?php echo base_url('/registrar/subcoordinador') ?>">¡Registra a tu gente!</a>	
  			<?php endif ?>
		</div>
		<div class="col-md-5">
			<img src="<?= base_url('assets/images/rafael-padilla-2.jpg') ?>" alt="Rafael Padilla" width='100%'>
		</div>
		<div class="col-md-7 pt-md-4 pt-sm-0 mt-4 pl-4 hide_cel">
			<h1 class="text-success font-weight-bold h1">Rafael Padilla (ADI)</h1>
			<p class="h3">Movimiento Acción Dominicana Inmediata.</p>
			<img class='mt-3' src="<?= base_url('assets/images/logo-fp-3.png') ?>" alt="Fuerza del Pueblo" width='30%'>
			<div class="w-100 mt-4 pt-4">
	  			<?php if (!$_SESSION['user']): ?>
	  			<a class="btn btn-success btn-lg" href="<?php echo base_url('/auth/registro') ?>">¡Registra a tu gente!</a>
	  			<?php else: ?>
	  			<a class="btn btn-success btn-lg" href="<?php echo base_url('/registrar/subcoordinador') ?>">¡Registra a tu gente!</a>	
	  			<?php endif ?>
			</div>
		</div>

	</div>
</div>

