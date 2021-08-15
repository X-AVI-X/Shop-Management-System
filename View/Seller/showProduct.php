<?php  
require_once '../Controller/productInfo.php';

$product = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Buy Price</th>
		<th>Sell Price</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="../View/showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['ID'] ?></a></td>
		<td><?php echo $product['Name'] ?></td>
		<td><?php echo $product['Buy_Price'] ?></td>
		<td><?php echo $product['Sell_Price'] ?></td>
		<td><img width="100px" src="Upload/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>