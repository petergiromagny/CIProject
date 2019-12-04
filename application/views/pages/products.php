<div class="row">
<?php if (isset($product)) {
	foreach ($product as $products) : ?>
			<div class="col-md-4">
				<div class="mb-4 shadow-lg block-product" style="margin-bottom: 2rem !important;">
					<div class="block-title">
						<h3><?= $products['name'] ?></h3>
					</div>
					<div class="block-img">
						<img class="img-product" src="<?= $products['img'] ?>" alt="<?= $products['name'] ?>">
					</div>
					<div class="block-button">
						<a href="<?php echo site_url('/products/'.$products['id_product'].'-'.strtolower(str_replace(' ', '-', $products['name']))); ?>" class="btn btn-secondary">See more</a>
						<button type="button" class="btn btn-secondary">Add to cart</button>
					</div>
				</div>
			</div>
	<?php endforeach;
} ?>
</div>

