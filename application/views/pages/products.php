<?php if (isset($product)) {
	foreach ($product as $products) : ?>
		<div>
			<h3><?= $products['name'] ?></h3>
			<img src="<?= $products['img'] ?>" alt="<?= $products['name'] ?>">
		</div>
	<?php endforeach;
} ?>
