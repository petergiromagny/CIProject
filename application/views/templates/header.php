<?php

?>
<html>
	<head>
		<meta charset="unicode">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"
			  href="https://use.typekit.net/gar6jrk.css">
		<link rel = "stylesheet" type = "text/css"
			  href = "<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet"
			  href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<link rel="stylesheet"
			  href="<?php echo base_url(); ?>assets/FontAwesome/css/all.css">

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
					<?php if ($this->session->userdata('logged_in') == TRUE){ ?>
					<ul class="login-list">
						<li><a href="<?= base_url();?>profile" class="login-button nav-link"><?= ucfirst($this->session->userdata('username')); ?></a></li>
						<li><a href="<?= site_url('Connection/logout'); ?>" class="login-button nav-link">Logout</a></li>
						<li class="ml-2"><i class="fas fa-shopping-cart"></i></li>
					</ul>
					<?php } else {?>
					<ul class="login-list">
						<li><a href="<?= base_url();?>register" class="login-button nav-link">Sign up</a></li>
						<li><a href="<?= base_url();?>login" class="login-button nav-link">Login</a></li>
					</ul>

						<!--TODO https://codepen.io/razaqultegar/pen/MqYmQv-->
<!--					<ul class="login-list">-->
<!--						<li><a href="--><?//= base_url();?><!--register" class="login-button nav-link">Sign up</a></li>-->
<!--						<li><a onclick="loginShow()" class="login-button nav-link">Login</a></li>-->
<!--					</ul>-->
<!---->
<!--					-->
<!--						<form id="login" class="col s12 loginbox" style="display: none;" action="--><?//= site_url('Connection/login'); ?><!--" method="post">-->
<!--							<div class="row">-->
<!--								<div class="input-field col s12">-->
<!--									<input id="username" type="text" name="username" required>-->
<!--									<label for="username">Username</label>-->
<!--								</div>-->
<!--								<div class="input-field col s12">-->
<!--									<input id="password" type="password" name="password" required>-->
<!--									<label for="password">Password</label>-->
<!--								</div>-->
<!--								<div class="col s12">-->
<!--									<button type="submit" name="login" class="btn btn-primary btn-signin mt-4">Sign in</button>-->
<!--									<p class="center">Not registered? <a href="#">Create an account</a></p>-->
<!--								</div>-->
<!--							</div>-->
<!--						</form>-->
					<?php }?>
				</div>
			</div>
		</div>
	</head>
	<body>
		<div id="container-body">



