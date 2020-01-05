<?php

?>
<html>
	<head>
		<meta charset="unicode">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?= base_url();?>/assets/img/logoFeu.png">
		<link rel="stylesheet"
			  href="https://use.typekit.net/gar6jrk.css">
		<link rel = "stylesheet" type = "text/css"
			  href = "<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet"
			  href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<link rel="stylesheet"
			  href="<?php echo base_url(); ?>assets/FontAwesome/css/all.css">


		<title>Feu Official</title>

	</head>
	<body>
		<div class="container container-bottom">
			<div class="row nav">
				<div class="col-md-5 nav-pages">
					<ul class="navbar-list">
						<li><a class="nav-link" href="<?= base_url();?>categories" title="Show categories">Categories</a></li>
						<li><a class="nav-link" href="<?= base_url();?>about" title="Learn more about us">About us</a></li>
						<li><a class="nav-link" href="<?= base_url();?>contact" title="Need to talk with us ?">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md">
					<a class="nav-link logo-header" href="<?php echo base_url();?>" title="Home">FEU</a>
				</div>
				<div class="col-md-5 nav-pages">
					<?php if ($this->session->userdata('logged_in') == TRUE){ ?>

						<?php if($this->session->userdata('level') == '2'){ ?>
							<ul class="login-list justify-content-end">
								<li><a href="<?= site_url('admin');?>" class="login-button nav-link" title="Secret Page...">Admin page</a></li>
								<li><a href="<?= site_url('Connection/logout'); ?>" class="login-button nav-link" title="ByeBye">Logout</a></li>
								<li class="ml-2"><a href="<?= base_url();?>cart" title="Watch what you buy"><i class="fas fa-shopping-cart"></a></i></li>
							</ul>
						<?php }else{?>
							<ul class="login-list justify-content-end">
								<li><a href="<?= base_url();?>profile" class="login-button nav-link"><?= ucfirst($this->session->userdata('username')); ?></a></li>
								<li><a href="<?= site_url('Connection/logout'); ?>" class="login-button nav-link" title="ByeBye">Logout</a></li>
								<li class="ml-2"><a href="<?= base_url();?>cart"><i class="fas fa-shopping-cart" title="Watch what you buy"></a></i></li>
							</ul>
						<?php }
					} else { ?>
						<ul class="login-list justify-content-end">
							<li><a href="<?= base_url();?>register" class="login-button nav-link" title="Join us !">Sign up</a></li>
							<li><a href="<?= base_url();?>login" class="login-button nav-link" title="Come !">Login</a></li>
						</ul>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="container">



