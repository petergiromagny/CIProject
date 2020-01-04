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
	<style>*{color: #2C3A40;}</style>
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar">
			<div class="sidebar-header">
				<h3 style="color: #D2D6D9;">Feu Official Admin</h3>
			</div>

			<ul class="list-unstyled components">
				<li>
					<a href="<?= site_url('admin/Category'); ?>">Category</a>
				</li>
				<li>
					<a href="<?= site_url('admin/Product'); ?>">Products</a>
				</li>
				<li>
					<a href="#">Discount code</a>
				</li>
				<li>
					<a href="#">Orders</a>
				</li>
				<li>
					<a href="#">Admin access</a>
				</li>
			</ul>
			<ul class="list-unstyled m-3">
				<li><a href="<?= base_url();?>home" class="btn btn-secondary mb-3">Back to website</a></li>
				<li><a href="<?= site_url('Connection/logout'); ?>" class="btn btn-secondary">Logout</a></li>
			</ul>
		</nav>
	</div>

</head>
<body>
<div id="content_admin" class="color">


