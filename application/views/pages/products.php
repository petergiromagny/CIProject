<div class="row">
<?php if (isset($product)) {
	foreach ($product as $products) : ?>
			<div class="col-md-4" style="height: 400px; margin-bottom: 40px">
				<div class="mb-4 shadow-lg" style="height: 100%;">
					<h3><?= $products['name'] ?></h3>
					<img class="img-product" src="<?= $products['img'] ?>" alt="<?= $products['name'] ?>">
				</div>
			</div>
	<?php endforeach;
} ?>
</div>

