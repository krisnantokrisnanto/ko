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
			"color" => ["red", "green"],
			"required" => ["id","name","price"],
		],
	];
?>
	<?php foreach ($coba as $data): ?>
		<fieldset>
			<legend> <?php echo $data['title']; ?> </legend>
			<?php echo $data['description']; ?><br/>
			<?php echo $data['type']; ?><br/>
			<?php echo $data['price']; ?><br/>
		</fieldset>
	<?php endforeach ?> 