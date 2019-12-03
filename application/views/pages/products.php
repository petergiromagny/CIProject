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
						<button type="button" class="btn btn-warning">See more</button>
						<button type="button" class="btn btn-warning">Add to cart</button>
					</div>
				</div>
			</div>
	<?php endforeach;
} ?>
</div>

