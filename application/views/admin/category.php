<div id="admin-container">
	<h1 class="name-page mb-4">Category</h1>
	<table class="table table-hover">
		<thead class="block-category">
		<tr>
			<th scope="col">Image</th>
			<th scope="col" class="text-center">Name</th>
			<th scope="col" class="text-center">Created at</th>
			<th scope="col" class="text-center">Modified at</th>
			<th scope="col" class="text-center">Edit Items</th>
			<th scope="col" class="text-center">Delete Items</th>
		</tr>
		</thead>
	<?php if(isset($category)) {
		foreach($category as $categories) : ?>
				<tbody>
				<tr class="td-middle">
					<th scope="row" class="block-cat-img"><img src="../<?= $categories['img']?>" alt="<?= $categories['name']?>"></th>
					<td class="text-center"><?= $categories['name']?></td>
					<td class="text-center"><?php $date = $categories['created_at'];
					 echo date('d/m/Y', strtotime($date))?>
					</td>
					<td class="text-center">No date</td>
					<td class="text-center"><a href="#" class="btn btn-secondary">EDIT</a></td>
					<td class="text-center"><a href="#"><button class="btn btn-secondary" onclick="deleteCategory()">DELETE</button></a></td>
				</tr>
				</tbody>
		<?php endforeach;
	}?>
	</table>
	<div>
		<a href="#addCategory" class="btn btn-secondary" style="width: 100%"><i class="far fa-plus-square" style="color: #FFFFFF"></i> Add Category</a>
	</div>
</div>


