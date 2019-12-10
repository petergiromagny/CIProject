<div id="container-sign">
	<div id="square-signin">
		<?php echo validation_errors('<div class="alert alert-danger">', '</div>')?>
		<form class="mb-4" method="post" action="<?= site_url('Connection/login'); ?>">
			<div class="form-group">
				<label for="mail" class="text-form">Username</label>
				<input type="username" class="form-control" id="email" aria-describedby="emailHelp" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="password" class="text-form">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="customSwitch1">
				<label class="custom-control-label" for="customSwitch1">Remember me</label>
			</div>
			<button type="submit" name="login" class="btn btn-primary btn-signin mt-4">Sign in</button>
			<?= '<label class="text-danger">'.$this->session->flashdata('error').'</label>' ?>
		</form>
	</div>
</div>
