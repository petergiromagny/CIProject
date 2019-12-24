<?php if ($this->session->userdata('logged_in') == TRUE){ ?>
<body >
<div class="container-fluid">
	<div id="rowrap">
		<div class="cart-left ">
			<img src="<?= base_url();?>/assets/img/logoFeu.png" alt="Feu">
		</div>
		<div class="cart-right mh-100">
			<h1>Your order</h1>
		</div>
	</div>
</div>
</body>
</html>
<?php } else { redirect('home'); }
