<?php if (isset($oneproduct)) { ?>
<div>
	<a class="btn-back" href="javascript:history.go(-1)"> < Back to all products</a>
</div>
<div class="row justify-content-around">
	<div class="col-md-5">
		<div class="one-product-img">
			<img class="one-img" src="../<?= $oneproduct['img'] ?>" alt="<?= $oneproduct['name'] ?>">
		</div>
	</div>
	<div class="col-md-4">
		<div style="text-align: center;" class="mb-5">
			<h2><?= $oneproduct['name']; ?></h2>
		</div>
		<p><?php echo $oneproduct['description']?></p>
		<div class="row mt-5">
			<div class="col-md">
				<p class="price"><?= number_format($oneproduct['price'], 2).' €';?></p>
			</div>
			<div class="col-md">
				<a class="btn btn-secondary" style="width: 100%;" href="">Add to cart</a>
			</div>
		</div>
	</div>
</div>
<?php }?>
