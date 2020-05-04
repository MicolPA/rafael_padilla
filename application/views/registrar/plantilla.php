<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8"> -->
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

	  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/"> -->
	  
		<link rel='icon' type='img/png' href="<?php echo base_url('assets/images/logo.png') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap4.min.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-xl">
    <a class="navbar-brand" href="#">Container XL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07XL">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07XL">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>
	
	<?//= $content ?>

	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  	<script src="<?php echo base_url('assets/js/jquery.mask.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap4.min.js') ?>"></script>
	
</body>
</html>