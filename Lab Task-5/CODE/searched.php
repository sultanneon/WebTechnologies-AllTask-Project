<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
		th,td {
  	padding:9px;
	}
	</style>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Profit</th>
			<th>ACtion</th></tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<?php if($product['Display']=='Yes'){ ?>
			<tr><td><?php echo $product['ID'] ?></td>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp <a href="delete.php?id=<?php echo $product['ID'] ?>">Delete</a></td></tr>
		<?php } ?>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>