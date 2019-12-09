<div id="container-sign">
	<form class="mt-5 mb-4 form" method="post">
		<?php if (isset($_SESSION['success']))
		{?>
			<div class="alert alert-success"><?= $_SESSION['success']; ?></div>
		<?php }?>
		<?php echo validation_errors('<div class="alert alert-danger">', '</div>')?>
		<div class="row mb-4">
			<div class="col">
				<label>
					<input type="text" class="form-control" placeholder="First name" name="firstname">
				</label>
			</div>
			<div class="col">
				<label>
					<input type="text" class="form-control" placeholder="Last name" name="lastname">
				</label>
			</div>
		</div>
		<div class="form-group mb-4">
			<input type="text" class="form-control" placeholder="Username" name="username">
		</div>
		<div class="form-group mb-4">
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
		</div>
		<div class="row mb-4">
			<div class="col">
				<label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</label>
			</div>
			<div class="col">
				<label>
					<input type="password" class="form-control" placeholder="Confirm password" name="password2">
				</label>
			</div>
		</div>
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input" id="customSwitch1" name="RGPD">
			<label class="custom-control-label" for="customSwitch1">Accept condition of the BetaWeb Products and Privacy</label>

		</div>
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input" id="customSwitch2">
			<label class="custom-control-label" for="customSwitch2">Subscribe to the BetaWeb Newsletter</label>
		</div>
		<button type="submit" name="register" class="btn btn-primary btn-signin mt-4">Sign in</button>
	</form>
</div>
