<?php
echo session_status();
session_destroy();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"
			  href="https://use.typekit.net/gar6jrk.css">
		<link rel = "stylesheet" type = "text/css"
			  href = "<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet"
			  href="<?php echo base_url(); ?>assets/Bootstrap/css/bootstrap.css">

		<title>CodeIgniter Tutorial</title>
		<div id="container-navbar">
			<div class="row nav">
				<div class="col-md nav-pages">
					<ul class="navbar-list">
						<li><a class="nav-link" href="<?php echo base_url();?>categories">Categories</a></li>
						<li><a class="nav-link" href="<?php echo base_url();?>about">About us</a></li>
						<li><a class="nav-link" href="<?php echo base_url();?>contact">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md">
					<a class="nav-link logo-header" href="<?php echo base_url();?>">FEU</a>
				</div>
				<div class="col-md nav-pages">
					<?php if (isset($_SESSION['success'])){ ?>
					<div>
						<p>Hello <?= $_SESSION['username'];?></p>
						<a href="<?= base_url(); ?>logout" class="btn btn-secondary">Logout</a>
					</div>
					<?php } else {?>
					<ul class="login-list">
						<li><a href="<?= base_url();?>register" class="login-button nav-link">Sign up</a></li>
						<li><a href="<?= base_url();?>login" class="login-button nav-link">Login</a></li>
					</ul>
					<?php }?>
				</div>
			</div>
		</div>
	</head>
	<body>
		<div id="container-body">



