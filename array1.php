<?php
	$array= [
			"Id"=>1,
			"nama"=>"electronik",
			"kategori"=>"hp",
			"harga"=>120000,
			"deskripsi"=>"semua awet",
			"type"=>"electronik"
	];			
?>
<table>
	<tr>
	<?php foreach($array as $data1 => $isi1 ):?>
		<th><?php echo"$data1";?></th>
	<?php endforeach?>
	</tr>
	<tr>
	<?php foreach($array as $data => $isi):?>
		<td><?php echo $isi;?></td>
	<?php endforeach?>
	</tr>
</table>