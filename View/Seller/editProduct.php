<?php 
 include_once ('./header.php');
require_once '../Controller/productInfo.php';
$product = fetchProduct($_GET['id']);




 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../Controller/updateProduct.php" method="POST" id="form" enctype="multipart/form-data">
  <label for="Name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="Name" name="Name"><br>
  <label for="Buy_price">Buy Price:</label><br>
  <input value="<?php echo $product['Buy_Price'] ?>" type="text" id="Buy_Price" name="Buy_Price"><br>
  <label for="Sell_Price">Sell Price:</label><br>
  <input value="<?php echo $product['Sell_Price'] ?>" type="text" id="Sell_Price" name="Sell_Price"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 
 <?php include 'footer.php' ?>
<script type="text/javascript" src = 'javascript/addProductScript.js'></script>

</body>
</html>

