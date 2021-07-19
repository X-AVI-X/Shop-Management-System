
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include_once "header.php";

?>

<table>
	<thead>
        <tr>
            <th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../show-product.php?id=<?php echo $product['ID'] ?>"><?php echo $product['ID'] ?></a></td>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['Sell_Price'] ?></td>
				<td><?php echo $product['image'] ?></td>
                <td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
				<td><a href="add-to-cart.php?id=<?php echo $product['ID'] ?>">Add to cart</td>
            </tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>