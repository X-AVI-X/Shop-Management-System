
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
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $product['Id'] ?>"><?php echo $product['Id'] ?></a></td>
				<td><?php echo $product['Productname'] ?></td>
				<td><a href="../editProduct.php?id=<?php echo $product['Id'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $product['Id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>