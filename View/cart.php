<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders | E-shop.com</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
</style>

    <?php 
		include_once ('./header.php');
        require_once ('../Model/model.php');
		require_once('../Controller/cart-view.php');
        $cart=showCart();
    ?>
</head>
<?php
    // echo "Var dump of cart: ";
    // echo sizeof($cart);
    // var_dump($cart);
?>
<body>
<div>
 	   <h3 style="color: red; background-color: yellow;" align="center">Orders</h3>
 </div>
 <label for="myInput">Live Search</label>
 <input id="myInput" type="text" placeholder="Search..">
<br><br>

 <table>
	<thead>
		<tr>
            <th>Product ID</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php foreach ($cart as $i => $product): ?>
			<tr>
                <td><?php echo $product['pid'] ?> </td>
				<td><a href="show-product.php?id=<?php echo $product['pid'] ?>" >
                <?php echo $product['pname'] ?> </a> </td>
				<td><?php echo $product['price'] ?></td>
				<td><a href="../Controller/remove-from-cart.php?id=<?php echo $product['pid'];?>">Remove</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

	<script>
		$(document).ready(function(){
  			$("#myInput").on("keyup", function() {
    			var value = $(this).val().toLowerCase();
    			$("#myTable tr").filter(function() {
      				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    			});
  			});
		});
	</script>
</body>
</html>

<?php 
    include_once ('./footer.php');
?>