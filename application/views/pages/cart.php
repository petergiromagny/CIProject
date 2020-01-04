<?php
$cart = "";
if ($this->session->userdata('logged_in') == TRUE){ ?>
<body>
	<div class="container">
<?php if (!empty($cart)){ ?>
		<div class="row justify-content-center">
			<div class="cart-header">
				<img src="<?= base_url();?>/assets/img/logoFeu.png" alt="Feu">
				<h1>Your cart</h1>
			</div>
		</div>
		<table class="table mt-5">
			<thead class="thead-cart p-5">
			<tr>
				<th scope="col">Product</th>
				<th scope="col" class="text-center">Name</th>
				<th scope="col" class="text-center">Quantity</th>
				<th scope="col" class="text-center">Price</th>
				<th scope="col" class="text-center">Delete</th>
			</tr>
			</thead>
			<tbody>
			<tr class="td-middle">
				<th scope="row" class="block-cart-img"><img src="<?= base_url();?>assets/img/feu_black_gradiant_tee.png" alt="tee"></th>
				<td class="text-center ">DATA</td>
				<td class="text-center ">
					<input type="number" min="0" max="50" style="text-align: center; color: #6c757d">
				</td>
				<td class="text-center ">DATA</td>
				<td class="text-center "><a href="#" class="btn btn-secondary">DELETE</a></td>
			</tr>
			</tbody>
		</table>
	<div class="row mt-5">
		<div class="col-auto mr-auto">
			<a href="home" class="btn btn-secondary">Continue Shopping</a>
		</div>
		<div class="col-auto">
			<a href="#" class="btn btn-secondary">Payement</a>
		</div>
	</div>
<?php } else { ?>

		<div class="row justify-content-center">
			<div class="cart-header">
				<img src="<?= base_url();?>/assets/img/logoFeu.png" alt="Feu">
				<h1>Your cart is empty</h1>
				<a href="home" class="btn btn-secondary mt-4">Continue Shopping</a>
			</div>
		</div>

<?php } ?>

	</div>
</body>
</html>
<?php } else { redirect('home'); }
