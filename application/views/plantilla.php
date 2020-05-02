<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?> | Rafael Padilla (ADY)</title>

	<?php $image = isset($image)?$image:'logo.png' ?>
	  <!-- META TAGS -->
	  <meta property="og:locale" content="es_ES" />
	  <meta property="og:type" content="website" />
	  <meta property="og:title" content="<?php echo $title ?> | PlanetaRD" />
	  <meta property="og:site_name" content="PlanetaRD" />
	  <meta name="twitter:card" content="summary" />
	  <meta name="twitter:title" content="<?php echo $title ?> | PlanetaRD" />
	  <meta property="og:image" content="<?php echo base_url('assets/images/') . $image ?>" />
	  <meta property="og:image:secure_url" content="<?php echo base_url('assets/images/') . $image ?>" />
	  <meta name="twitter:image" content="<?php echo base_url('assets/images/') . $image ?>" />

	  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">
	  
	  <link rel='icon' type='img/png' href="<?php echo base_url('assets/images/logo.png') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap4.min.css?v=1') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css?v=2') ?>">

</head>
<body>

	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
	  <h5 class="my-0 mr-md-auto font-weight-normal">
	  	<img class='hidden_cell pr-1' src="<?= base_url('assets/images/logo-fp.png') ?>" width='30px' class='mr-2' style='margin-top: -0.8rem'> 
	  	<a href='/' class="mt-2 font-weight-bold link-no text-dark" style="display: inline-block;">Rafael Padilla (ADY)
	  	</a>
	  </h5>
	  <nav class="my-2 my-md-0 mr-md-3">
	    <a class="btn btn-outline-primary" href="/auth/registro">Registrarse</a>
	  	<a class="btn btn-outline-success" href="#">Iniciar Sesión</a>
	  </nav>
	  
	</div>

	<div class="jumbotron2 bg-white" style="height: 70px"></div>
	
	<div class="">
		<?php $this->load->view($content);?>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  	<script src="<?php echo base_url('assets/js/jquery.mask.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap4.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js?v=1') ?>"></script>

	<?php if ($this->session->flashdata('alert')): ?>
	<?php $alert = $this->session->flashdata('alert') ?>
	<script>
		swal("Alerta", "<?= $alert ?>", "warning");
	</script>	
	<?php endif ?>

	<?php if ($this->session->flashdata('success')): ?>
	<?php $alert = $this->session->flashdata('success') ?>
	<script>
		swal("Correcto", "<?= $alert ?>", "success");
	</script>	
	<?php endif ?>

	<?php if ($this->session->flashdata('error')): ?>
	<?php $alert = $this->session->flashdata('error') ?>
	<script>
		swal("Error", "<?= $alert ?>", "error");
	</script>	
	<?php endif ?>
</body>
</html>