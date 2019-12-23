<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #2C3A40; color: white; }
::-moz-selection { background-color: #2C3A40; color: white; }

body {
	background-color: #74888C;
	margin: 40px;
	font: 13px/20px normal kanit,sans-serif;
	color: #212529;
}

p{
	font-weight: 600;
}

</style>
</head>
<body>
	<div class="row justify-content-center">
		<img src="<?php echo base_url();?>assets/img/logoFeu.png" alt="imgProfile">
	</div>
	<div class="mt-4 text-center">
		<h1><?php echo $heading; ?></h1>
		<p><?php echo $message; ?></p>
		<a href="javascript:history.go(-1)" class="btn btn-dark">Go back</a>
	</div>
</body>
</html>
