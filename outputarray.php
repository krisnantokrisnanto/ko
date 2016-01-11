
<?php
	$coba = [
		[
			"title" => "product",
			"description" => "a product.... . . . ",
			"type" => "object",
			"price" => "1000",
			"color" => ["red", "green"],
			"required" => ["id","name","price"],
		],
		[
			"title" => "product 2",
			"description" => "a product 2.... . . . ",
			"type" => "object",
			"price" => "1000",
			"color" => ["red","green"],
			"required" => ["id","name","price"],
		],
		[
			"title" => "product 3",
			"description" => "a product 2.... . . . ",
			"type" => "object",
			"price" => "1000",
			"color" => ["red","green"],
			"required" => ["id","name","price"],
		],
	];
?>

<table>
	<tr>
		<th>Title</th>
		<th>Description</th>
		<th>Type</th>
		<th>Price</th>
		<th>Color</th>
		<th>Required</th>
	</tr>
	<tr>
		<?php foreach ($coba as $data): ?>
			 <tr>
				<td><?php echo $data['title']; ?></td>
				<td><?php echo $data['description']; ?></td>
				<td><?php echo $data['type']; ?></td>
				<td><?php echo $data['price']; ?></td>
				<td><?php echo implode('</td><td>',$data['color'] );  ?> </td>
				<td><?php echo implode('</td><td>',$data['required'] );  ?> </td>
			</tr> 
		<?php endforeach ?>
	</tr>
</table>
