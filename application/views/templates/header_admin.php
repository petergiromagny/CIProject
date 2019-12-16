<?php

?>
<html>
<head>
	<meta charset="unicode">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/gar6jrk.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/FontAwesome/css/all.css">


	<title>Feu Admin</title>
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar">
			<div class="sidebar-header">
				<h3>Feu Official Admin</h3>
			</div>

			<ul class="list-unstyled components">
				<li>
					<a href="#">Category</a>
				</li>
				<li>
					<a href="#">Products</a>
				</li>
				<li>
					<a href="#">Portfolio</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</nav>
		<nav>
			<?php if ($this->session->userdata('logged_in') == TRUE){ ?>
				<ul class="login-list">
					<li><a href="<?= base_url();?>profile" class="login-button nav-link"><?= ucfirst($this->session->userdata('username')); ?></a></li>
					<li><a href="<?= site_url('Connection/logout'); ?>" class="login-button nav-link">Logout</a></li>
					<li class="ml-2"><i class="fas fa-shopping-cart"></i></li>
				</ul>
			<?php }?>
		</nav>
	</div>

</head>
<body>
<div id="content_admin" class="color">


