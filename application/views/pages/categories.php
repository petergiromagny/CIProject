<div id="container-cat">
	<?php if (isset($category)) {
	foreach ($category as $categories) :?>
	<div class="categories-block">
		<a href="<?= site_url('categories/'. $categories['id_category'].'-'.$categories['name'])?>">
			<img src="<?= $categories['img']?>" class="cat-banner" alt="tees">
			<div class="middle">
				<div class="cat-name"><?= $categories['name']?></div>
			</div>
		</a>
	</div>
	<?php endforeach;
	}?>
</div>
